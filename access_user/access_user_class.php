<?php

session_start();

require($_SERVER['DOCUMENT_ROOT']."/classes/access_user/db_config.php"); 

class Access_user {
	
	var $table_name = USER_TABLE; 
	
	var $user;
	var $user_pw;
	var $access_level;
	var $user_full_name;
	var $user_info;
	var $user_email;
	var $save_login = "no";
	var $cookie_name = COOKIE_NAME;
	var $cookie_path = COOKIE_PATH; 
	var $is_cookie;
	
	var $count_visit;
	
	var $id;
	var $language = "en"; // change this property to use messages in another language 
	var $the_msg;
	var $login_page;
	var $main_page;
	var $password_page;
	var $deny_access_page;
	var $auto_activation = true;
	var $send_copy = false; // send a mail copy to the administrator (register only)
	
	var $webmaster_mail = WEBMASTER_MAIL;
	var $webmaster_name = WEBMASTER_NAME;
	var $admin_mail = ADMIN_MAIL;
	var $admin_name = ADMIN_NAME;
	
	function Access_user() {
		$this->connect_db();
		$this->login_page = LOGIN_PAGE;
		$this->main_page = START_PAGE;
		$this->password_page = ACTIVE_PASS_PAGE;
		$this->deny_access_page = DENY_ACCESS_PAGE;
		$this->admin_page = ADMIN_PAGE;
	}	
	function check_user($pass = "") {
		switch ($pass) {
			case "new": 
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE email = '%s' OR login = '%s'", $this->table_name, $this->user_email, $this->user);
			break;
			case "lost":
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE email = '%s' AND active = 'y'", $this->table_name, $this->user_email);
			break;
			case "new_pass":
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE pw = '%s' AND id = %d", $this->table_name, $this->user_pw, $this->id);
			break;
			case "active":
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE id = %d AND active = 'n'", $this->table_name, $this->id);
			break;
			case "validate":
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE id = %d AND tmp_mail <> ''", $this->table_name, $this->id);
			break;
			default:
			$password = (strlen($this->user_pw) < 32) ? md5($this->user_pw) : $this->user_pw;
			$sql = sprintf("SELECT COUNT(*) AS test FROM %s WHERE BINARY login = '%s' AND pw = '%s' AND active = 'y'", $this->table_name, $this->user, $password);
		}
		$result = mysql_query($sql) or die(mysql_error());
		if (mysql_result($result, 0, "test") == 1) {
			return true;
		} else {
			return false;
		}
	}
	// New methods to handle the access level	
	function get_access_level() {
		$sql = sprintf("SELECT access_level FROM %s WHERE login = '%s' AND active = 'y'", $this->table_name, $this->user);
		if (!$result = mysql_query($sql)) {
		   $this->the_msg = $this->messages(14);
		} else {
			$this->access_level = mysql_result($result, 0, "access_level");
		}
	}
	function set_user() {
		$_SESSION['user'] = $this->user;
		$_SESSION['pw'] = $this->user_pw;
		if (isset($_SESSION['referer']) && $_SESSION['referer'] != "") {
			$next_page = $_SESSION['referer'];
			unset($_SESSION['referer']);
		} else {
			$next_page = $this->main_page;
		}
		header("Location: ".$next_page);
	}
	function connect_db() {
		error_reporting(E_ERROR | E_PARSE);
		$conn_str = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
		mysql_select_db(DB_NAME); // if there are problems with the tablenames inside the config file use this row 
	}
	function login_user($user, $password) {
		if ($user != "" && $password != "") {
			$this->user = $user;
			$this->user_pw = $password;
			if ($this->check_user()) {
				$this->login_saver();
				if ($this->count_visit) {
					$this->reg_visit($user, $password);
				}
				$this->set_user();
			} else {
				$this->the_msg = $this->messages(10);
			}
		} else {
			$this->the_msg = $this->messages(11);
		}
	}
	function login_saver() {
		if ($this->save_login == "no") {
			if (isset($_COOKIE[$this->cookie_name])) {
				$expire = time()-3600;
			} else {
				return;
			}
		} else {
			$expire = time()+2592000;
		}		
		$cookie_str = $this->user.chr(31).base64_encode($this->user_pw);
		setcookie($this->cookie_name, $cookie_str, $expire, $this->cookie_path);
	}
	function login_reader() {
		if (isset($_COOKIE[$this->cookie_name])) {
			$cookie_parts = explode(chr(31), $_COOKIE[$this->cookie_name]);
			$this->user = $cookie_parts[0];
			$this->user_pw = base64_decode($cookie_parts[1]);
			$this->is_cookie = true;
		}			 
	}
	function reg_visit($login, $pass) {
		$visit_sql = sprintf("UPDATE %s SET extra_info = '%s' WHERE login = '%s' AND pw = '%s'", $this->table_name, date("Y-m-d H:i:s"), $login, md5($pass));
		mysql_query($visit_sql);
	}
	function log_out() {
		unset($_SESSION['user']);
		unset($_SESSION['pw']);
		header("Location: ".$this->login_page);
	}
	function access_page($refer = "", $qs = "", $level = DEFAULT_ACCESS_LEVEL) {
		$refer_qs = $refer;
		$refer_qs .= ($qs != "") ? "?".$qs : "";
		if (isset($_SESSION['user']) && isset($_SESSION['pw'])) {
			$this->user = $_SESSION['user'];
			$this->user_pw = $_SESSION['pw'];
			$this->get_access_level();
			if (!$this->check_user()) {
				$_SESSION['referer'] = $refer_qs;
				header("Location: ".$this->login_page);
			}
			else if($this->access_level==9)
			{
				header("Location: http://localhost/classes/access_user/manager.php");
			}
			else if($this->access_level==8)
			{
				header("Location: http://localhost/classes/access_user/operator.php");
			}
			else if($this->access_level==7)
			{
				header("Location: http://localhost/classes/access_user/Staff.php");
			}
			
			else 
			if ($this->access_level < $level) {
				header("Location: ".$this->deny_access_page);
			}

		} else { 
			$_SESSION['referer'] = $refer_qs;
			header("Location: ".$this->login_page);
		}
		
	}
	function get_user_info() {
		$sql_info = sprintf("SELECT real_name, extra_info, email, id FROM %s WHERE login = '%s' AND pw = '%s'", $this->table_name, $this->user, md5($this->user_pw));
		$res_info = mysql_query($sql_info);
		$this->id = mysql_result($res_info, 0, "id");
		$this->user_full_name = mysql_result($res_info, 0, "real_name");
		$this->user_info = mysql_result($res_info, 0, "extra_info");
		$this->user_email = mysql_result($res_info, 0, "email");
	}
	function update_user($new_password, $new_confirm, $new_name, $new_info, $new_mail) {
		if ($new_password != "") {
			if ($this->check_new_password($new_password, $new_confirm)) {
				$ins_password = $new_password;
				$update_pw = true;
			} else {
				return;
			}
		} else {
			$ins_password = $this->user_pw;
			$update_pw = false;
		}
		if (trim($new_mail) <> $this->user_email) {
			if  ($this->check_email($new_mail)) {
				$this->user_email = $new_mail;
				if (!$this->check_user("lost")) {
					$update_email = true;
				} else {
					$this->the_msg = $this->messages(31);
					return;
				}
			} else {
				$this->the_msg = $this->messages(16);
				return;
			}
		} else {
			$update_email = false;
			$new_mail = "";
		}
		$upd_sql = sprintf("UPDATE %s SET pw = %s, real_name = %s, extra_info = %s, tmp_mail = %s WHERE id = %d", 
			$this->table_name,
			$this->ins_string(md5($ins_password)),
			$this->ins_string($new_name),
			$this->ins_string($new_info),
			$this->ins_string($new_mail),
			$this->id);
		$upd_res = mysql_query($upd_sql);
		if ($upd_res) {
			if ($update_pw) {
				$_SESSION['pw'] = $this->user_pw = $ins_password;
				if (isset($_COOKIE[$this->cookie_name])) {
					$this->save_login = "yes";
					$this->login_saver();
				}
			}
			$this->the_msg = $this->messages(30);
			if ($update_email) {
				if ($this->send_mail($new_mail, 33)) {
					$this->the_msg = $this->messages(27);
				} else {
					mysql_query(sprintf("UPDATE %s SET tmp_mail = ''", $this->table_name));
					$this->the_msg = $this->messages(14);
				} 
			}
		} else {
			$this->the_msg = $this->messages(15);
		}
	}
	function check_new_password($pass, $pw_conform) {
		if ($pass == $pw_conform) {
			if (strlen($pass) >= PW_LENGTH) {
				return true;
			} else {
				$this->the_msg = $this->messages(32);
				return false;
			}
		} else {
			$this->the_msg = $this->messages(38);
			return false;
		}	
	}
	function check_email($mail_address) {
		if (preg_match("/^[0-9a-z]+(([\.\-_])[0-9a-z]+)*@[0-9a-z]+(([\.\-])[0-9a-z-]+)*\.[a-z]{2,4}$/i", $mail_address)) {
			return true;
		} else {
			return false;
		}
	}
	function ins_string($value, $type = "") {
		$value = (!get_magic_quotes_gpc()) ? addslashes($value) : $value;
		switch ($type) {
			case "int":
			$value = ($value != "") ? intval($value) : NULL;
			break;
			default:
			$value = ($value != "") ? "'" . $value . "'" : "''";
		}
		return $value;
	}
	function register_user($first_login, $first_password, $confirm_password, $first_name, $first_info, $first_email) {
		if ($this->check_new_password($first_password, $confirm_password)) {
			if (strlen($first_login) >= LOGIN_LENGTH) {
				if ($this->check_email($first_email)) {
					$this->user_email = $first_email;
					$this->user = $first_login;
					if ($this->check_user("new")) {
						$this->the_msg = $this->messages(12);
					} else {
						$sql = sprintf("INSERT INTO %s (id, login, pw, real_name, extra_info, email, access_level, active) VALUES (NULL, %s, %s, %s, %s, %s, %d, 'n')", 
							$this->table_name,
							$this->ins_string($first_login),
							$this->ins_string(md5($first_password)),
							$this->ins_string($first_name),
							$this->ins_string($first_info),
							$this->ins_string($this->user_email),
							DEFAULT_ACCESS_LEVEL);
						$ins_res = mysql_query($sql);
						if ($ins_res) {
							$this->id = mysql_insert_id();
							$this->user_pw = $first_password;
							if ($this->send_mail($this->user_email)) {
								$this->the_msg = $this->messages(13);
							} else {
								mysql_query(sprintf("DELETE FROM %s WHERE id = %s", $this->table_name, $this->id));
								$this->the_msg = $this->messages(14);
							}
						} else {
							$this->the_msg = $this->messages(15);
						}
					}
				} else {
					$this->the_msg = $this->messages(16);
				}
			} else {
				$this->the_msg = $this->messages(17);
			}
		}
	}
	function validate_email($validation_key, $key_id) {
		if ($validation_key != "" && strlen($validation_key) == 32 && $key_id > 0) {
			$this->id = $key_id;
			if ($this->check_user("validate")) {
				$upd_sql = sprintf("UPDATE %s SET email = tmp_mail, tmp_mail = '' WHERE id = %d AND pw = '%s'", $this->table_name, $key_id, $validation_key);
				if (mysql_query($upd_sql)) {
					$this->the_msg = $this->messages(18);
				} else {
					$this->the_msg = $this->messages(19);
				}
			} else {
				$this->the_msg = $this->messages(34);
			}
		} else {
			$this->the_msg = $this->messages(21);
		}
	}
	function activate_account($activate_key, $key_id) {
		if ($activate_key != "" && strlen($activate_key) == 32 && $key_id > 0) {
			$this->id = $key_id;
			if ($this->check_user("active")) {
				if ($this->auto_activation) {
					$upd_sql = sprintf("UPDATE %s SET active = 'y' WHERE id = %s AND pw = '%s'", $this->table_name, $key_id, $activate_key);
					if (mysql_query($upd_sql)) {
						if ($this->send_confirmation($key_id)) {
							$this->the_msg = $this->messages(18);
						} else {
							$this->the_msg = $this->messages(14);
						}
					} else {
						$this->the_msg = $this->messages(19);
					}
				} else {
					if ($this->send_mail($this->admin_mail, 0, true)) {
						$this->the_msg = $this->messages(36);
					} else {
						$this->the_msg = $this->messages(14);
					}
				}
			} else {
				$this->the_msg = $this->messages(20);
			}
		} else {
			$this->the_msg = $this->messages(21);
		}
	}
	function send_confirmation($id) {
		$sql = sprintf("SELECT email FROM %s WHERE id = %d", $this->table_name, $id);
		$user_email = mysql_result(mysql_query($sql), 0, "email");
		if ($this->send_mail($user_email, 37)) {
			return true;
		} else {
			return false;
		}
	}
	function send_mail($mail_address, $num = 29) {
		$header = "From: \"".$this->webmaster_name."\" <".$this->webmaster_mail.">\r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Mailer: Olaf's mail script version 1.11\r\n";
		$header .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
		$header .= "Content-Transfer-Encoding: 7bit\r\n";
		if (!$this->auto_activation) {
			$subject = "New user request...";
			$body = "New user registration on ".date("Y-m-d").":\r\n\r\nClick here to enter the admin page:\r\n\r\n"."http://".$_SERVER['HTTP_HOST'].$this->admin_page."?login_id=".$this->id;
		} else {
			$subject = $this->messages(28);
			$body = $this->messages($num);
		}
		if (mail($mail_address, $subject, $body, $header)) {
			return true;
		} else {
			return false;
		} 
	}
	function forgot_password($forgot_email) { 
		if ($this->check_email($forgot_email)) {
			$this->user_email = $forgot_email;
			if (!$this->check_user("lost")) {
				$this->the_msg = $this->messages(22);
			} else {
				$forgot_sql = sprintf("SELECT id, pw FROM %s WHERE email = '%s'", $this->table_name, $this->user_email);
				if ($forgot_result = mysql_query($forgot_sql)) {
					$this->id = mysql_result($forgot_result, 0, "id");
					$this->user_pw = mysql_result($forgot_result, 0, "pw");
					if ($this->send_mail($this->user_email, 35)) {
						$this->the_msg = $this->messages(23);
					} else {
							$this->the_msg = $this->messages(14);
					}
				} else {
					$this->the_msg = $this->messages(15);
				}
			}
		} else {
			$this->the_msg = $this->messages(16);
		}
	}
	function check_activation_password($controle_str, $id) {
		if ($controle_str != "" && strlen($controle_str) == 32 && $id > 0) {
			$this->user_pw = $controle_str;
			$this->id = $id;
			if ($this->check_user("new_pass")) {
				// this is a fix for version 1.76
				$sql_get_user = sprintf("SELECT login FROM %s WHERE pw = '%s' AND id = %d", $this->table_name, $this->user_pw, $this->id);
				$get_user = mysql_query($sql_get_user);
				$this->user = mysql_result($get_user, 0, "login"); // end fix
				return true;
			} else {
				$this->the_msg = $this->messages(21);
				return false;
			}
		} else {
			$this->the_msg = $this->messages(21);
			return false;
		}
	}
	function activate_new_password($new_pass, $new_confirm, $old_pass, $user_id) {
		if ($this->check_new_password($new_pass, $new_confirm)) {
			$sql_new_pass = sprintf("UPDATE %s SET pw = '%s' WHERE pw = '%s' AND id = %d", $this->table_name, md5($new_pass), $old_pass, $user_id);
			if (mysql_query($sql_new_pass)) {
				$this->the_msg = $this->messages(30);
				return true;
			} else {
				$this->the_msg = $this->messages(14);
				return false;
			}
		} else {
			return false;
		}
	}
	function messages($num) {
		$host = "http://".$_SERVER['HTTP_HOST'];
		switch ($this->language) {
			
			default:
			$msg[10] = "Login and/or password did not match to the database.";
			$msg[11] = "Login and/or password is empty!";
			$msg[12] = "Sorry, a user with this login and/or e-mail address already exist.";
			$msg[13] = "Please check your e-mail and follow the instructions.";
			$msg[14] = "Sorry, an error occurred please try it again.";
			$msg[15] = "Sorry, an error occurred please try it again later.";
			$msg[16] = "The e-mail address is not valid.";
			$msg[17] = "The field login (min. ".LOGIN_LENGTH." char.) is required.";
			$msg[18] = "Your request is processed. Login to continue.";
			$msg[19] = "Sorry, cannot activate your account.";
			$msg[20] = "There is no account to activate.";
			$msg[21] = "Sorry, this activation key is not valid!";
			$msg[22] = "Sorry, there is no active account which match with this e-mail address.";
			$msg[23] = "Please check your e-mail to get your new password.";
			$msg[25] = "Sorry, cannot activate your password.";
			$msg[26] = ""; // not used at the moment
			$msg[27] = "Please check your e-mail and activate your modifikation(s).";
			$msg[28] = "Your request must be processed...";
			$msg[29] = "Hello,\r\n\r\nto activate your request click the following link:\r\n".$host.$this->login_page."?ident=".$this->id."&activate=".md5($this->user_pw)."&language=".$this->language;
			$msg[30] = "Your account is modified.";
			$msg[31] = "This e-mail address already exist, please use another one.";
			$msg[32] = "The field password (min. ".PW_LENGTH." char) is required.";
			$msg[33] = "Hello,\r\n\r\nthe new e-mail address must be validated, click the following link:\r\n".$host.$this->login_page."?id=".$this->id."&validate=".md5($this->user_pw)."&language=".$this->language;
			$msg[34] = "There is no e-mail address for validation.";
			$msg[35] = "Hello,\r\n\r\nEnter your new password next, please click the following link to enter the form:\r\n".$host.$this->password_page."?id=".$this->id."&activate=".$this->user_pw."&language=".$this->language;
			$msg[36] = "Your request is processed and is pending for validation by the admin. \r\nYou will get an e-mail if it's done.";
			$msg[37] = "Hello ".$this->user.",\r\n\r\nThe account is active and it's possible to login now.\r\n\r\nClick on this link to access the login page:\r\n".$host.$this->login_page."\r\n\r\nkind regards\r\n".$this->admin_name;
			$msg[38] = "The confirmation password does not match the password. Please try again.";
		}
		return $msg[$num];
	}
}
?>
