<?php 
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr4
 *  License: MIT
 *
 *  Translated by brzezinsky
 *
 *  Polish Language - Users
 *  Język polski - Użytkownicy
 */

$language = array(
	/* Komunikat do ukończenia rejestracji */
	'validate_account_command' => 'Aby ukończyć rejestrację, w grze wpisz polecenie <strong>/validate {x} </ strong>.', // Nie usuwaj zmiennej {x}

	/* Relacje */
	'guest' => 'Gość',
	'guests' => 'Goście',
	
	// Panel użytkownika
	'user_cp' => 'Panel użytkownika',
	'user_cp_icon' => '<i class="fa fa-cogs" aria-hidden="true"></i> <span class="mobile_only">Panel użytkownika</span>',
	'overview' => 'Podgląd',
	'user_details' => 'Dane użytkownika',
	'profile_settings' => 'Ustawienia profilu',
	'successfully_logged_out' => 'Zostałeś pomyślnie wylogowany .',
	'messaging' => 'Wiadomości',
	'click_here_to_view' => 'Kliknij tutaj aby wyświetlić.',
	'moderation' => 'Moderacja',
	'administration' => 'Administracja',
	'alerts' => 'Powiadomienia',
	'delete_all' => 'Usuń wszystko',
	'private_profile' => 'Profil prywatny',
	
	// Ustawienia profilu
	'field_is_required' => '{x} jest wymagane.', // Nie usuwaj zmiennej {x}
	'settings_updated_successfully' => 'Zaktualizowano ustawienia.',
	'password_changed_successfully' => 'Pomyślnie zmieniono hasło.',
	'change_password' => 'Zmień hasło',
	'current_password' => 'Aktualne hasło',
	'new_password' => 'Nowe hasło',
	'confirm_new_password' => 'Potwierdź nowe hasło',
	'incorrect_password' => 'Twoje hasło jest niepoprawne.',
	'two_factor_auth' => 'Uwierzytelnianie dwuetapowe',
	'enabled' => 'Tak',
	'disabled' => 'Nie',
	'enable' => 'Aktywuj',
	'disable' => 'Dezaktywuj',
	'tfa_scan_code' => 'Zeskanuj poniższy kod w aplikacji uwierzytelniającej (na przykład: Google Authenticator):',
	'tfa_code' => 'Jeśli Twoje urządzenie nie ma kamery lub nie możesz zeskanować kodu QR, wprowadź poniższy kod:',
	'tfa_enter_code' => 'Wprowadź kod wyświetlany w aplikacji uwierzytelniającej:',
	'invalid_tfa' => 'Nieprawidłowy kod, proszę spróbować ponownie.',
	'tfa_successful' => 'Uwierzytelnianie dwuetapowe zostało pomyślnie skonfigurowane. Będziesz musiał uwierzytelnić się przy każdym logowaniu.',
	'active_language' => 'Aktywny język',
	'timezone' => 'Strefa czasowa',
	'upload_new_avatar' => 'Załaduj nowy awatar',
	'nickname_already_exists' => 'Taki pseudonim już istnieje.',
	'change_email_address' => 'Zmień adres e-mail',
	'email_already_exists' => 'Podany adres e-mail już istnieje.',
	'email_changed_successfully' => 'Adres e-mail został pomyślnie zmieniony.',
	'avatar' => 'Awatar',
	
	// Powiadomienia
	'user_tag_info' => 'Zostałeś oznaczony tagiem w poście {x}.', // Nie usuwaj zmiennej {x}
	'no_alerts' => 'Brak powiadomień',
	'view_alerts' => 'Zobacz powiadomienia',
	'1_new_alert' => 'Masz powiadomienie',
	'x_new_alerts' => 'Masz {x} nowych powiadomień', // Nie usuwaj zmiennej {x}
	'no_alerts_usercp' => 'Nie masz żadnych powiadomień.',
	
	// Rejestracja
	'registration_check_email' => 'Dziękujemy za rejestrację! Sprawdź pocztę szukając maila z linkiem aktywacyjnym, aby ukończyć rejestrację. Jeśli nie możesz znaleźć wiadomości e-mail, sprawdź w folderze spam.',
	'username' => 'Nazwa użytkownika',
	'nickname' => 'Nazwa w grze',
	'minecraft_username' => 'Nazwa w grze',
	'email_address' => 'Adres e-mail',
	'email' => 'E-mail',
	'password' => 'Hasło',
	'confirm_password' => 'Potwierdź hasło',
	'i_agree' => 'Zgadzam się',
	'agree_t_and_c' => 'Klikając <strong class="label label-primary">zarejestruj</strong>, zgadzasz się na nasz <a href="{x}" target="_blank">Regulamin</a>.',
	'create_an_account' => 'Stwórz konto',
	'terms_and_conditions' => 'Regulamin',
	'validation_complete' => 'Twoje konto zostało zweryfikowane, możesz teraz się zalogować.',
	'validation_error' => 'Podczas sprawdzania konta wystąpił nieznany błąd. Skontaktuj się z administratorem witryny.',
	'signature' => 'Sygnatura',
	'signature_max_900' => 'Twója sygnatura muże mieć maksymalnie 900 znaków.',

	// Rejestracja - Authme
    'connect_with_authme' => 'Połącz swoje konto przez AuthMe',
	'authme_help' => 'Proszę podać szczegóły swojego konta na serwerze. Jeśli nie masz konta w grze, dołącz do serwera i postępuj zgodnie z podaną instrukcją.',
	'unable_to_connect_to_authme_db' => 'Nie można połączyć się z bazą danych AuthMe. Jeśli ten błąd będzie się powtarzał, skontaktuj się z administratorem.',
	'authme_account_linked' => 'Konto zostało pomyślnie powiązane.',
	'authme_email_help_1' => 'Na koniec wpisz swój adres e-mail.',
	'authme_email_help_2' => 'Na koniec wpisz swój adres e-mail, a także wybierz nazwę wyświetlaną swojego konta.',
	
	// Błędy rejestracji
	'username_required' => 'Nazwa użytkownika jest wymagana.',
	'email_required' => 'Adres e-mail jest wymagany.',
	'password_required' => 'Hasło jest wymagane.',
	'mcname_required' => 'Nazwa z gry jest wymagana.',
	'accept_terms' => 'Musisz zaakceptować warunki przed rejestracją.',
	'username_minimum_3' => 'Twoja nazwa użytkownika musi składać się co najmniej z 3 znaków.',
	'mcname_minimum_3' => 'Twoja nazwa z gry musi składać się co najmniej z 3 znaków.',
	'password_minimum_6' => 'Twoje hasło musi mieć co najmniej 6 znaków.',
	'username_maximum_20' => 'Twoja nazwa użytkownika nie może przekraczać 20 znaków.',
	'mcname_maximum_20' => 'Twoja nazwa z gry może mieć maksymalnie 20 znaków.',
	'password_maximum_30' => 'Twoje hasło może mieć maksymalnie 30 znaków.',
	'passwords_dont_match' => 'Hasła nie pasują do siebie.',
	'username_mcname_email_exists' => 'Taka nazwa użytkownika lub adres e-mail już istnieje.',
	'invalid_mcname' => 'Nazwa z gry jest nieprawidłowa.',
	'invalid_email' => 'E-mail jest nieprawidłowy.',
	'mcname_lookup_error' => 'Wystąpił błąd podczas komunikacji z serwerami Mojanga w celu weryfikacji Twojej nazwy użytkownika. Spróbuj ponownie później.',
	'invalid_recaptcha' => 'Nieprawidłowa odpowiedź reCAPTCHA.',
	'verify_account' => 'Zweryfikuj konto',
	'verify_account_help' => 'Postępuj zgodnie z poniższymi instrukcjami, abyśmy mogli zweryfikować Twoje konto w grze.',
	'validate_account' => 'Zatwierdź konto',
	'verification_failed' => 'Weryfikacja nie powiodła się. Spróbuj ponownie później.',
	'verification_success' => 'Pomyślnie zweryfikowano! Możesz się teraz zalogować.',
	'authme_username_exists' => 'Twoje konto z gry zostało już połączone z witryną!',
	'uuid_already_exists' => 'Twój identyfikator UUID już istnieje, co oznacza, że to konto Minecraft zostało już zarejestrowane.',
	
	// Logowanie
	'successful_login' => 'Zostałeś pomyślnie zalogowany.',
	'incorrect_details' => 'Podałeś nieprawidłowe dane.',
	'inactive_account' => 'Twoje konto jest nieaktywne. Sprawdź wiadomości e-mail z linkiem sprawdzania poprawności, w tym w spamie.',
	'account_banned' => 'To konto jest zablokowane.',
	'forgot_password' => 'Zapomniałeś hasła?',
	'remember_me' => 'Zapamiętaj mnie',
	'must_input_email' => 'Musisz podać adres e-mail.',
	'must_input_username' => 'Musisz wprowadzić nazwę użytkownika.',
	'must_input_password' => 'Musisz wprowadzić hasło.',

	// Zapomniałem hasła
    'forgot_password_instructions' => 'Wprowadź swój adres e-mail, abyśmy mogli wysłać Ci dalsze instrukcje dotyczące resetowania hasła.',
	'forgot_password_email_sent' => 'Jeśli konto z takim adresem e-mail istnieje, wysłano wiadomość e-mail zawierającą dalsze instrukcje. Jeśli nie możesz go znaleźć, spróbuj sprawdzić folder spam.',
	'unable_to_send_forgot_password_email' => 'Nie można wysłać e-maila z przypomnieniem hasła. Skontaktuj się z administratorem.',
	'enter_new_password' => 'Potwierdź swój adres e-mail i wprowadź nowe hasło poniżej.',
	'incorrect_email' => 'Podany adres e-mail nie pasuje do żądania.',
	'forgot_password_change_successful' => 'Twoje hasło zostało zmienione. Możesz się teraz zalogować.',
	
	// Profile
	'profile' => 'Profil',
	'follow' => 'Obserwuj',
	'no_wall_posts' => 'Nie ma jeszcze żadnych wpisów na tablicy.',
	'change_banner' => 'Zmień banner',
	'post_on_wall' => 'Napisz post na swojej tablicy {x}', // Nie usuwaj zmiennej {x}
	'invalid_wall_post' => 'Upewnij się, że Twój wpis zawiera od 1 do 10000 znaków.',
	'1_reaction' => '1 reakcja',
	'x_reactions' => '{x} reakcji', // Nie usuwaj zmiennej {x}
	'1_like' => '1 polubienie',
	'x_likes' => '{x} polubień', // Nie usuwaj zmiennej {x}
	'1_reply' => '1 odpowiedź',
	'x_replies' => '{x} odpowiedzi', // Nie usuwaj zmiennej {x}
	'no_replies_yet' => 'Brak odpowiedzi',
	'feed' => 'Tablica',
	'about' => 'O mnie',
	'reactions' => 'Reakcje',
	'replies' => 'Odpowiedzi',
	'new_reply' => 'Nowa odpowiedź',
	'registered' => 'Rejestracja:',
	'registered_x' => 'Rejestracja: {x}',
	'last_seen' => 'Ostatnio widziany:',
	'new_wall_post' => '{x} napisał na Twoim profilu.',
	'couldnt_find_that_user' => 'Nie znaleziono takiego użytkownika.',
	'block_user' => 'Zablokuj użytkownika',
	'unblock_user' => 'Odblokuj użytkownika',
	'confirm_block_user' => 'Czy na pewno chcesz zablokować tego użytkownika? Nie będzie mógł wysyłać do Ciebie prywatnych wiadomości ani oznaczać Cię w postach.',
	'confirm_unblock_user' => 'Czy na pewno chcesz odblokować tego użytkownika? Będzie mógł wysyłać prywatne wiadomości i oznaczać Cię w postach.',
	'user_blocked' => 'Użytkownik zablokowany.',
	'user_unblocked' => 'Użytkownik odblokowany.',
	'views' => 'Wyświetlenia profilu:',
	'private_profile_page' => 'To jest prywatny profil!',
	'new_wall_post_reply' => '{x} odpowiedział na twój post na profilu {y} .', // Nie usuwaj zmiennej {x} i {y}
	'new_wall_post_reply_your_profile' => '{x} odpowiedział na Twój wpis na Twoim profilu.', // Nie usuwaj zmiennej {x}
	'no_about_fields' => 'Ten użytkownik nie dodał jeszcze żadnych pól.',
	
	// Zgłoszenia
	'invalid_report_content' => 'Nie można utworzyć raportu. Upewnij się, że zgłoszenie zawiera od 2 do 1024 znaków.',
	'report_post_content' => 'Podaj powód swojego zgłoszenia',
	'report_created' => 'Zgłoszenie zostało utworzone pomyślnie',
	
	// Wiadomości
	'no_messages' => 'Brak nowych wiadomości',
	'no_messages_full' => 'Nie masz żadnych wiadomości..',
	'view_messages' => 'Zobacz wiadomości',
	'1_new_message' => 'Masz wiadomość',
	'x_new_messages' => 'Masz {x} nowych wiadomośći', // Nie usuwaj zmiennej {x}
	'new_message' => '<i class="fa fa-plus-circle"></i> Nowa wiadomość',
	'message_title' => 'Tytuł wiadomości',
	'to' => 'Do',
	'separate_users_with_commas' => '(Oddziel użytkowników przecinkami)',
	'title_required' => 'Wprowadź tytuł',
	'content_required' => 'Wprowadź treść',
	'users_to_required' => 'Wprowadź odbiorców wiadomości',
	'cant_send_to_self' => 'Nie możesz wysłać wiadomości do siebie!',
	'title_min_2' => 'Tytuł musi składać się z co najmniej z 2 znaków',
	'content_min_2' => 'Treść musi mieć co najmniej 2 znaki',
	'title_max_64' => 'Tytuł musi mieć maksymalnie 64 znaki',
	'content_max_20480' => 'Treść musi mieć maksymalnie 20480 znaków',
	'max_pm_10_users' => 'Możesz wysłać wiadomość tylko do 10 użytkowników',
	'message_sent_successfully' => 'Wiadomość została wysłana',
	'participants' => 'Uczestnicy',
	'last_message' => 'Ostatnio odpowiedział',
	'by' => 'przez',
	'leave_conversation' => 'Opuść rozmowę',
	'confirm_leave' => 'Czy na pewno chcesz opuścić tę rozmowę??',
	'one_or_more_users_blocked' => 'Nie możesz wysyłać prywatnych wiadomości do co najmniej jednego członka rozmowy.',
	
	/* Obszar kar */
	'you_have_been_banned' => 'Twoje konto zostało zablokowane!',
	'you_have_received_a_warning' => 'Otrzymałeś ostrzeżenie!',
	'acknowledge' => 'Uznać',
	
	/* E-mail */
	'email_greeting' => 'Witaj,',
	'email_message' => 'Dziękujemy za rejestrację! Aby zakończyć rejestrację, kliknij poniższy link:',
	'forgot_password_email_message' => 'Aby zresetować hasło, kliknij poniższy link. Jeśli nie zrobiłes tego, możesz bezpiecznie usunąć tę wiadomość e-mail.',
	'email_thanks' => 'Dziękujemy,',

    /* Hooks */
    'user_x_has_registered' => '{x} dołączył ' . SITE_NAME . '!'
);
