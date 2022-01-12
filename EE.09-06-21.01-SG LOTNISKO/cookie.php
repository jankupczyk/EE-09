<?php
			if (isset($_COOKIE["ciasteczko"])) {
				echo "<b>Miło nam, że nas znowu odwiedziłeś</b>";
			} else {
				$cookie_name = "cookie";
				$cookie_value = "";
				$cookie_time = time() + 60*60*2;
				$cookie_path = "";
				$cookie_domain = "";
				$cookie_secure  = false;
				$cookie_httponly = false;
				setcookie($cookie_name, $cookie_value, $cookie_time, $cookie_path, $cookie_domain, $cookie_secure, $cookie_httponly);
				echo "<p style='font-style: italic;'>Sprawdź regulamin naszej strony!</p>";
			}
 ?>