<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *  License: MIT
 *
 *  Translated by brzezinsky
 *
 *  Polish Language - ACP
 *  Język polski - Panel administratora
 */

$language = array(
	// Login
	're-authenticate' => 'Ponownie wykonaj uwierzytelnienie',

	// Nawigacja
	'dashboard' => 'Panel',
	'configuration' => 'Konfiguracja',
	'layout' => 'Wygląd',
	'user_management' => 'Zarządzanie użytkownikami',
	'admin_cp' => 'Panel administratora',
	'administration' => 'Administracja',
	'overview' => 'Podgląd',
	'core' => 'System',
	'integrations' => 'Integracje',
	'minecraft' => 'Minecraft',
	'modules' => 'Moduły',
	'security' => 'Bezpieczeństwo',
	'sitemap' => 'Mapa witryny',
	'styles' => 'Style',
	'users_and_groups' => 'Użytkownicy i grupy',

	// Podgląd
	'running_nameless_version' => 'Obecna wersja NamelessMC - <strong>{x}</strong>', // Nie usuwaj zmiennej "{x}"
	'running_php_version' => 'Obecna wersja PHP - <strong>{x}</strong>', // Nie usuwaj zmiennej "{x}"
	'statistics' => 'Statystyki',
	'registrations' => 'Rejestracje',
	'topics' => 'Tematy',
	'posts' => 'Posty',
	'notices' => 'Powiadomienia',
	'no_notices' => 'Brak powiadomień.',
	'email_errors_logged' => 'Błędy e-mail zostały zarejestrowane',

	// System
	'settings' => 'Ustawienia',
	'general_settings' => 'Ogólne ustawienia',
	'sitename' => 'Nazwa strony',
	'default_language' => 'Domyślny język',
	'default_language_help' => 'Użytkownicy będą mogli wybierać spośród zainstalowanych języków.',
	'install_language' => 'Zainstaluj nowe języki',
	'update_user_languages' => 'Ustaw ten język jako domyślny wszystkim użytkownikom.',
	'update_user_languages_warning' => 'Spowoduje to aktualizację języka wszystkich użytkowników witryny, nawet jeśli już ją wybrali!',
	'updated_user_languages' => 'Języki użytkownika zostały pomyślnie zaktualizowane.',
	'installed_languages' => 'Wszystkie nowe języki zostały pomyślnie zainstalowane.',
	'default_timezone' => 'Domyślna strefa czasowa',
	'registration' => 'Rejestracja',
	'enable_registration' => 'Włączyć rejestrację?',
	'verify_with_mcassoc' => 'Weryfikować konta użytkowników za pomocą MCAssoc?',
	'email_verification' => 'Włączyć weryfikację e-mail?',
	'registration_settings_updated' => 'Ustawienia rejestracji zostały pomyślnie zaktualizowane.',
	'homepage_type' => 'Typ strony głównej',
	'post_formatting_type' => 'Typ formatowania postów',
	'portal' => 'Portal',
	'private_profiles' => 'Profile prywatne',
	'missing_sitename' => 'Wstaw nazwę witryny o długości od 2 do 64 znaków.',
	'missing_contact_address' => 'Wstaw kontaktowy adres e-mail o długości od 3 do 255 znaków.',
	'use_friendly_urls' => 'Przyjazne linki',
	'use_friendly_urls_help' => 'WAŻNA WIADOMOŚĆ: Twój serwer musi być skonfigurowany, aby umożliwić korzystania z mod_rewrite i pliku .htaccess, aby to działało.',
	'config_not_writable' => 'Nie można zapisać wprowadzonych zmian w pliku <strong>core/config.php</strong>. Sprawdź uprawnienia pliku.',
	'settings_updated_successfully' => 'Ustawienia ogólne zostały pomyślnie zaktualizowane.',
	'social_media' => 'Społeczność',
	'youtube_url' => 'Link do kanału na Youtube',
	'twitter_url' => 'Link do Twitter\'a',
	'twitter_dark_theme' => 'Użyć ciemnego motywu Twittera?',
	'discord_id' => 'Discord Server ID',
	'discord_widget_theme' => 'Motyw widżetu Discord\'a',
	'dark' => 'Ciemny',
	'light' => 'Jasny',
	'google_plus_url' => 'Link do Google Plus',
	'facebook_url' => 'Link do profilu na Facebook\'u',
	'social_media_settings_updated' => 'Ustawienia mediów społecznościowych zostały pomyślnie zaktualizowane.',
	'successfully_updated' => 'Pomyślnie zaktualizowano',
    'debugging_and_maintenance' => 'Debugowanie i konserwacja',
    'debugging_settings_updated_successfully' => 'Ustawienia debugowania zostały pomyślnie zaktualizowane.',
    'enable_debug_mode' => 'Włączyć tryb debugowania?',
	'force_https' => 'Wymuś https? (Przekierowanie SSL)',
	'force_https_help' => 'Po włączeniu wszystkie żądania do Twojej witryny zostaną przekierowane na https. Aby to działało poprawnie, musisz mieć aktywny certyfikat SSL.',
	'force_www' => 'Wymuś www?',
	'contact_email_address' => 'Kontaktowy adres email',
	'emails' => 'E-maile',
	'email_errors' => 'Błędy wysyłania',
	'registration_email' => 'E-mail rejestracyjny',
	'contact_email' => 'E-mail kontaktowy',
	'forgot_password_email' => 'Zapomniałem hasła e-mail',
	'unknown' => 'Nieznany',
	'delete_email_error' => 'Usuń błąd',
	'confirm_email_error_deletion' => 'Czy na pewno chcesz usunąć ten błąd??',
	'viewing_email_error' => 'Wyświetlanie błędu',
	'unable_to_write_email_config' => 'Nie można zapisać wprowadzonych zmian w pliku <strong>core/email.php</strong>. Sprawdź uprawnienia pliku.',
	'enable_mailer' => 'Włączyć PHPMailer?',
	'enable_mailer_help' => 'Włącz tę opcję, jeśli wiadomości e-mail nie są domyślnie wysyłane. Korzystanie z PHPMailer wymaga posiadania usługi umożliwiającej wysyłanie wiadomości e-mail, takich jak Gmail lub dostawca SMTP.',
	'outgoing_email' => 'Wychodzący adres e-mail',
	'outgoing_email_info' => 'To jest adres e-mail, z którego NamelessMC będzie korzystać do wysyłania wiadomości e-mail.',
	'mailer_settings_info' => 'Następujące pola są wymagane, jeśli włączyłeś opcje PHPMailer. Aby uzyskać więcej informacji na temat wypełniania tych pól, sprawdź <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">wiki</a>.',
	'host' => 'Host',
	'email_port' => 'Port',
	'email_password_hidden' => 'Hasło nie jest wyświetlane ze względu bezpieczeństwa.',
	'send_test_email' => 'Wyślij testowy e-mail',
	'send_test_email_info' => 'Poniższy przycisk spróbuje wysłać wiadomość na Twój adres e-mail <strong>{x}</strong>. Zostaną wyświetlone wszystkie błędy wygenerowane podczas wysyłania wiadomości e-mail.', // Nie usuwaj zmiennej {x}
    'send' => 'Wyślij',
	'test_email_error' => 'Test email error:',
	'test_email_success' => 'Testowa wiadomość e-mail została pomyślnie wysłana!',
	'terms_error' => 'Wprowadź regulamin nie dłuższy niż 100 000 znaków.',
	'privacy_policy_error' => 'Wprowadź politykę prywatności nie dłuższą niż 100 000 znaków.',
	'terms_updated' => 'Polityka prywatności i warunki zostały pomyślnie zaktualizowane .',
	'avatars' => 'Awatary',
	'allow_custom_avatars' => 'Zezwalaj na niestandardowe awatary użytkowników?',
	'default_avatar' => 'Awatar domyślny',
	'custom_avatar' => 'Awatar niestandardowy',
	'minecraft_avatar' => 'Minecraft avatar',
	'minecraft_avatar_source' => 'Źródło awataru Minecraft',
	'built_in_avatars' => 'Wbudowana usługa skina',
	'minecraft_avatar_perspective' => 'Perspektywa skina',
	'face' => 'Twarz',
	'head' => 'Głowa',
	'bust' => 'Popiersie',
	'select_default_avatar' => 'Wybierz nowy domyślny awatar:',
	'no_avatars_available' => 'Brak dostępnych awatarów. Najpierw prześlij nowy obraz.',
	'avatar_settings_updated_successfully' => 'Ustawienia awatara zostały pomyślnie zaktualizowane.',
	'navigation' => 'Nawigacja',
	'navbar_order' => 'Kolejność wyświetlania',
	'navbar_order_instructions' => 'Każdemu elementowi można nadać liczbę większą od 0, aby ustawiać elementy w pasku nawigacyjnym, przy czym 1 oznacza pierwszy element, a wyższe liczby po nim.',
	'navbar_icon' => 'Ikona',
	'navbar_icon_instructions' => 'Możesz również dodać ikonę do każdego elementu paska nawigacyjnego tutaj, na przykład używając <a href="https://fontawesome.com/v4.7.0/" target="_blank" rel="noopener nofollow">Font Awesome</a>.',
	'navigation_settings_updated_successfully' => 'Ustawienia nawigacji zostały pomyślnie zaktualizowane.',
	'dropdown_items' => 'Elementy rozwijane',
	'enable_page_load_timer' => 'Włączyć czasomierz ładowania strony?',
	'google_recaptcha' => 'Włączyć Google reCAPTCHA?',
	'recaptcha_site_key' => 'reCAPTCHA klucz strony',
	'recaptcha_secret_key' => 'reCAPTCHA sekretny klucz',
	'registration_disabled_message' => 'Wiadomość o wyłączonej rejestracji',
	'enable_nicknames_on_registration' => 'Włączyć nazwy z gry dla rejestrujących się użytkowników?',
	'validation_promote_group' => 'Grupa po sprawdzeniu poprawności',
	'validation_promote_group_info' => 'Jest to grupa, do której użytkownik zostanie awansowany po sprawdzeniu poprawności swojego konta.',
	'login_method' => 'Metoda logowania',
	'privacy_and_terms' => 'Prywatność i warunki',

	// Reakcje
	'icon' => 'Ikona',
	'type' => 'Typ',
	'positive' => 'Pozytywny',
	'neutral' => 'Nautralny',
	'negative' => 'Negatywny',
	'editing_reaction' => 'Edytowanie reakcji',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nowa reakcja',
	'creating_reaction' => 'Tworzenie reakcji',
	'no_reactions' => 'Nie ma jeszcze reakcji.',
	'reaction_created_successfully' => 'Reakcja została pomyślnie utworzona.',
	'reaction_edited_successfully' => 'Reakcja została pomyślnie edytowana.',
	'reaction_deleted_successfully' => 'Reakcja została pomyślnie usunięta.',
	'name_required' => 'Nazwa jest wymagana',
	'html_required' => 'Kod HTML jest wymagany',
	'type_required' => 'Typ jest wymagany',
	'name_maximum_16' => 'Nazwa nie może zawierać więcej niż 16 znaków',
	'html_maximum_255' => 'Kod HTML nie może zawierać więcej niż 255 znaków',
	'confirm_delete_reaction' => 'Czy na pewno chcesz usunąć tę reakcję??',

	// Dodatkowe ola profilu
	'custom_fields' => 'Niestandardowe pola profilu',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nowe pole',
	'required' => 'Wymagane',
	'editable' => 'Edytowalne',
	'public' => 'Publiczny',
	'text' => 'Tekst',
	'textarea' => 'Obszar tekstowy',
	'date' => 'Data',
	'creating_profile_field' => 'Tworzenie pola profilu',
	'editing_profile_field' => 'Edycja pola profilu',
	'field_name' => 'Nazwa pola',
	'profile_field_required_help' => 'Wymagane pola muszą być wypełnione przez użytkownika, które pojawią się podczas rejestracji.',
	'profile_field_public_help' => 'Publiczne pola będą wyświetlane wszystkim użytkownikom, jeśli jest to wyłączone tylko moderatorzy mogą wyświetlać wartości.',
	'profile_field_error' => 'Wprowadź nazwę pola od 2 do 16 znaków.',
	'description' => 'Opis',
	'display_field_on_forum' => 'Wyświetlić to pole na forum?',
	'profile_field_forum_help' => 'Jeśli ta opcja jest włączona, pole będzie wyświetlane przez użytkownika obok postów na forum.',
	'profile_field_editable_help' => 'Jeśli ta opcja jest włączona, użytkownicy będą mieli uprawnienia do edytowania pola w swoich ustawieniach profilu.',
	'no_custom_fields' => 'Nie ma jeszcze niestandardowych pól profilu.',
	'profile_field_updated_successfully' => 'Pole profilu zostało pomyślnie zaktualizowane.',
	'profile_field_created_successfully' => 'Pole profilu zostało pomyślnie stworzone.',
	'profile_field_deleted_successfully' => 'Pole profilu zostało pomyślnie usunięte.',

	// Minecraft
	'enable_minecraft_integration' => 'Włączyć integrację z Minecraft?',
	'mc_service_status' => 'Status usługi Minecraft',
	'service_query_error' => 'Nie można odczytać statusu usługi.',
	'authme_integration' => 'Integracja AuthMe',
	'authme_integration_info' => 'Gdy ta opcja jest włączona to użytkownicy mogą rejestrować się tylko w grze.',
	'enable_authme' => 'Włączyć integrację z AuthMe?',
	'authme_db_address' => 'AuthMe - adres bazy danych',
	'authme_db_port' => 'AuthMe - port bazy danych',
	'authme_db_name' => 'AuthMe - nazwa bazy danych',
	'authme_db_user' => 'AuthMe - użytkownik bazy danych',
	'authme_db_password' => 'AuthMe - hasło bazy danych',
	'authme_db_password_hidden' => 'Hasło bazy danych AuthMe jest ukryte ze względu bezpieczeństwa.',
	'authme_hash_algorithm' => 'AuthMe - funkcja haszująca',
	'authme_db_table' => 'AuthMe - tabela z użytkownikami',
	'enter_authme_db_details' => 'Wprowadź poprawne dane bazy danych.',
	'authme_password_sync' => 'Synchronizować hasła z AuthMe?',
	'authme_password_sync_help' => 'Jeśli opcja jest włączona, po każdorazowym zmienienu hasła na serwerze przez użytkownika, jego hasło zostanie również zaktualizowane na stronie internetowej.',
	'minecraft_servers' => 'Serwery Minecraft',
	'account_verification' => 'Weryfikacja konta Minecraft',
	'server_banners' => 'Banery serwerów',
	'query_errors' => 'Błędy zapytania',
	'add_server' => '<i class="fa fa-plus-circle"></i> Dodaj serwer',
	'no_servers_defined' => 'Nie zdefiniowano jeszcze żadnych serwerów',
	'query_settings' => 'Ustawienia query',
	'default_server' => 'Domyślny serwer',
	'no_default_server' => 'Brak domyślnego serwera',
	'external_query' => 'Użyć zapytania zewnętrznego?',
	'external_query_help' => 'Jeśli domyślne query serwera nie działa, włącz tę opcję.',
	'adding_server' => 'Dodawanie serwera',
	'server_name' => 'Nazwa serwera',
	'server_address' => 'Adres serwera',
	'server_address_help' => 'Jest to adres IP lub domena używana do łączenia się z serwerem bez portu.',
	'server_port' => 'Port serwera',
    'parent_server' => 'Serwer nadrzędny',
    'parent_server_help' => 'Serwer nadrzędny jest zazwyczaj instancją BungeeCord, do której serwer jest podłączony, jeśli taki istnieje.',
    'no_parent_server' => 'Brak serwera nadrzędnego',
    'bungee_instance' => 'Instancja BungeeCord?',
    'bungee_instance_help' => 'Wybierz tę opcję, jeśli serwer jest instancją BungeeCord.',
    'server_query_information' => 'Aby wyświetlić listę graczy online w Twojej witrynie, w pliku <strong>server.properties</strong> znajdującym się w plikach serwera <strong>musisz</strong> włączyć opcję \'enable-query\'',
    'enable_status_query' => 'Włączyć status query?',
    'status_query_help' => 'Jeśli ta opcja jest włączona, strona statusu pokazuje, że ten serwer jest włączony lub wyłączony.',
    'enable_player_list' => 'Włączyć liste graczy?',
    'pre_1.7' => 'Wersja Minecraft starsza niż 1.7?',
    'player_list_help' => 'Jeśli ta opcja jest włączona, strona statusu wyświetli listę dostępnych graczy na serwerze.',
    'server_query_port' => 'Port query serwera',
    'server_query_port_help' => 'Ta opcje znajduje się w pliku <strong>server.properties</strong> serwera. Nie zapomnij zmienić opcji enable-query na "true".',
    'server_name_required' => 'Wprowadź nazwę serwera',
    'server_name_minimum' => 'Upewnij się, że nazwa serwera ma co najmniej 1 znak',
    'server_name_maximum' => 'Upewnij się, że nazwa serwera ma maksymalnie 20 znaków',
    'server_address_required' => 'Wprowadź adres serwera',
    'server_address_minimum' => 'Upewnij się, że adres serwera ma co najmniej 1 znak',
    'server_address_maximum' => 'Upewnij się, że adres serwera ma maksymalnie 64 znaki',
    'server_port_required' => 'Wprowadź port serwera',
    'server_port_minimum' => 'Upewnij się, że port serwera ma co najmniej 2 znaki',
    'server_port_maximum' => 'Upewnij się, że port serwera ma maksymalnie 5 znaków',
    'server_parent_required' => 'Wybierz serwer nadrzędny',
    'query_port_maximum' => 'Upewnij się, że port query ma maksymalnie 5 znaków',
    'server_created' => 'Serwer został pomyślnie utworzony.',
    'confirm_delete_server' => 'Czy na pewno chcesz usunąć ten serwer?',
	'server_updated' => 'Serwer został pomyślnie zaktualizowany.',
	'editing_server' => 'Edytowanie serwera',
	'server_deleted' => 'Serwer został pomyślnie usunięty',
	'unable_to_delete_server' => 'Nie można usunąć serwera.',
	'leave_port_empty_for_srv' => 'Możesz zostawić to pole puste, jeśli port serwera Minecraft ma wartość 25565 lub jeśli twoja domena używa rekordu SRV',
    'viewing_query_error' => 'Wyświetlanie błędu zapytania query',
    'confirm_query_error_deletion' => 'Czy na pewno chcesz usunąć ten błąd zapytania?',
    'no_query_errors' => 'Nie zarejestrowano błędów query.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Nowy Baner',
	'purge_errors' => 'Usuń błędy',
	'confirm_purge_errors' => 'Czy na pewno chcesz usunąć wszystkie błędy??',
	'email_errors_purged_successfully' => 'Błędy wiadomości e-mail zostały pomyślnie usunięte.',
	'error_deleted_successfully' => 'Błąd został pomyślnie usunięty.',
	'no_email_errors' => 'Nie zarejestrowano błędów wiadomości e-mail.',
	'email_settings_updated_successfully' => 'Ustawienia poczty e-mail zostały pomyślnie zaktualizowane.',
	'content' => 'Zawartość',
	'mcassoc_help' => 'mcassoc to usługa zewnętrzna, za pomocą której można zweryfikować, czy użytkownicy są właścicielami zarejestrowanego konta Minecraft. Aby skorzystać z tej funkcji, musisz zarejestrować się w celu uzyskania klucza <a href="https://mcassoc.lukegb.com/" target="_blank">tutaj</a>.',
	'mcassoc_key' => 'Klucz mcassoc',
	'mcassoc_instance' => 'mcassoc klucz strony',
	'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Kliknij, aby wygenerować klucz</a>',
	'mcassoc_error' => 'Upewnij się, że klucz został poprawnie wprowadzony oraz że wygenerowałeś poprawnie klucz instancji.',
	'updated_mcassoc_successfully' => 'Ustawienia mcassoc zostały pomyślnie zaktualizowane.',
	'force_premium_accounts' => 'Wymusić konta premium w Minecrafcie?',
	'banner_background' => 'Tło banera',
	'query_interval' => 'Interwał wysyłania zapytania (musi wynosić od 5 do 60 minut)',
	'player_graphs' => 'Wykresy gracza',
	'player_count_cronjob_info' => 'Możesz ustawić zadanie cron, aby przesyłać zapytania do serwerów co {x} minut za pomocą następującego polecenia:',
	'status_page' => 'Włączyć stronę statusu?',
	'minecraft_settings_updated_successfully' => 'Ustawienia zostały pomyślnie zaktualizowane .',
	'server_id_x' => 'Server ID: {x}', // Nie usuwaj zmiennej {x}
	'server_information' => 'Informacje o serwerze',
	'query_information' => 'Informacje o query',
	'query_errors_purged_successfully' => 'Błędy query zostały pomyślnie usunięte.',
	'query_error_deleted_successfully' => 'Błąd query został pomyślnie usunięty.',
	'banner_updated_successfully' => 'Banner został pomyślnie zaktualizowany. Może minąć trochę czasu, zanim zmiany zaczną obowiązywać.',

	// Moduły
	'modules_installed_successfully' => 'Wszystkie nowe moduły zostały pomyślnie zainstalowane.',
	'enabled' => 'Włączony',
	'disabled' => 'Wyłączony',
	'enable' => 'Aktywuj',
	'disable' => 'Dezaktywuj',
	'module_enabled' => 'Moduł włączony.',
	'module_disabled' => 'Moduł wyłączony.',
	'author' => 'Autor:',
	'author_x' => 'Autor: {x}', // Nie usuwaj zmiennej {x}
	'module_outdated' => 'Wykryliśmy, że ten moduł jest przeznaczony dla wersji NamelessMC {x}, ale używasz wersji {y}', // Nie usuwaj zmiennej "{x}" i "{y}"
	'find_modules' => 'Znajdź moduły',
	'view_all_modules' => 'Wyświetl wszystkie moduły',
	'unable_to_retrieve_modules' => 'Nie można pobrać modułów',
	'module' => 'Moduły',
	'unable_to_enable_module' => 'Nie można włączyć niekompatybilnego modułu.',

	// Style
	'templates' => 'Szablony',
	'template_outdated' => 'Wykryliśmy, że Twój szablon jest przeznaczony do NamellessMC w wersji {x}, używasz wersji {y}', // Nie usuwaj zmiennej "{x}" i "{y}"
	'active' => 'Aktywny',
	'deactivate' => 'Dezaktywuj',
	'activate' => 'Aktywuj',
	'warning_editing_default_template' => 'Uwaga! Zaleca się, aby nie edytować domyślnego szablonu.',
	'images' => 'Obrazy',
	'upload_new_image' => 'Prześlij nowy obraz',
	'reset_background' => 'Zresetuj tło',
	'install' => '<i class="fa fa-plus-circle"></i> Instaluj',
	'template_updated' => 'Szablon został pomyślnie zaktualizowany .',
	'default' => 'Domyślny',
	'make_default' => 'Zrób domyślnym',
	'default_template_set' => 'Szablon {x} pomyślnie zmieniono na domyślny.', // Nie usuwaj zmiennej {x}
	'template_deactivated' => 'Szablon dezaktywowany.',
	'template_activated' => 'Szablon aktywowany.',
	'permissions' => 'Uprawnienia',
	'setting_perms_for_x' => 'Ustawienia uprawnień do szablonu {x}', // Nie usuwaj zmiennej {x}
	'templates_installed_successfully' => 'Wszystkie nowe szablony zostały pomyślnie zainstalowane.',
	'confirm_delete_template' => 'Czy na pewno chcesz usunąć ten szablon?',
	'delete' => 'Usuń',
	'template_deleted_successfully' => 'Szablon został usunięty.',
	'background_image_x' => 'Zdjęcie w tle: <strong>{x}</strong>', // Nie usuwaj zmiennej {x}
	'find_templates' => 'Znajdź szablon',
	'view_all_templates' => 'Wyświetl wszystkie szablony',
	'unable_to_retrieve_templates' => 'Nie można pobrać szablonów',
	'template' => 'Szablon',
	'stats' => 'Statystyki',
	'downloads_x' => 'Pobrań: {x}',
	'views_x' => 'Wyświetleń: {x}',
	'rating_x' => 'Oceny: {x}',
	'editing_template_x' => 'Edytujesz szablon: {x}', // Nie usuwaj zmiennej {x}
	'editing_template_file_in_template' => 'Edytujesz plik {x} w szablonie {y}', // Nie usuwaj zmiennej {x} i {y}
	'cant_write_to_template' => 'Nie można zapisać wprowadzonych zmian w pliku szablonu! Sprawdź uprawnienia pliku.',
	'unable_to_delete_template' => 'Nie można usunąć szablonu. Sprawdź uprawnienia pliku.',
	'background_reset_successfully' => 'Tło zostało pomyślnie zresetowane.',
	'background_updated_successfully' => 'Tło zostało pomyślnie zaktualizowane.',
	'unable_to_enable_template' => 'Nie można włączyć niezgodnego szablonu.',

	// Użytkownicy i grupy
	'users' => 'Użytkownicy',
	'groups' => 'Grupy',
	'group' => 'Grupa',
	'new_user' => '<i class="fa fa-plus-circle"></i> Nowy użytkownik',
	'creating_new_user' => 'Tworzenie nowego użytkownika',
	'registered' => 'Zarejestrowany od',
	'user_created' => 'Użytkownik został pomyślnie utworzony.',
	'cant_delete_root_user' => 'Nie można usunąć użytkownika root!',
	'cant_modify_root_user' => 'Nie można zmodyfikować tej grupy użytkownika!',
	'user_deleted' => 'Użytkownik został usunięty pomyślnie.',
	'confirm_user_deletion' => 'Czy na pewno chcesz usunąć użytkownika <strong>{x}</strong>?', // Nie usuwaj zmiennej {x}
	'validate_user' => 'Zatwierdź użytkownika',
	'update_uuid' => 'Zaktualizuj identyfikator UUID',
	'update_mc_name' => 'Zaktualizuj nazwe gracza',
	'reset_password' => 'Zresetuj hasło',
	'punish_user' => 'Ukarz użytkownika',
	'delete_user' => 'Usuń użytkownika',
	'minecraft_uuid' => 'Minecraft UUID',
	'uuid_max_32' => 'Identyfikator UUID musi mieć maksymalnie 32 znaki.',
	'unable_to_update_uuid' => 'Nie można zaktualizować identyfikatora UUID.',
	'other_actions' => 'Inne akcje',
	'disable_avatar' => 'Wyłącz awatary',
	'select_user_group' => 'Musisz wybrać grupę użytkownika.',
	'title_max_64' => 'Tytuł użytkownika nie może przekraczać 64 znaków.',
	'group_id' => 'Numer grupy',
	'name' => 'Nazwa grupy',
	'title' => 'Tytuł użytkownika',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nowa grupa',
	'group_name_required' => 'Wprowadź nazwę grupy.',
	'group_name_minimum' => 'Upewnij się, że nazwa grupy ma co najmniej 2 znaki.',
	'group_name_maximum' => 'Upewnij się, że nazwa grupy ma maksymalnie 20 znaków.',
	'creating_group' => 'Tworzenie nowej grupy',
	'group_html_maximum' => 'Upewnij się, że kod HTML nie przekracza 1024 znaków.',
	'group_html' => 'Kod HTML',
	'group_html_lg' => 'Duży kod HTML',
	'group_username_colour' => 'Kolor nazwy użytkownika grupy',
	'group_staff' => 'Czy grupa jest grupą dla administratorów?',
	'group_modcp' => 'Czy użytkownik tej grupy może mieć dostęp do panelu moderatora?',
	'group_admincp' => 'Czy użytkownik tej grupy może mieć dostęp do panelu administratora?',
	'delete_group' => 'Usuń grupę',
	'confirm_group_deletion' => 'Czy na pewno chcesz usunąć grupę {x}?', // Nie usuwaj zmiennej {x}
	'group_not_exist' => 'Taka grupa nie istnieje.',
	'secondary_groups' => 'Druga grupa',
	'secondary_groups_info' => 'Użytkownik uzyska dodatkowe uprawnienia z tych grup. Ctrl + LPM, aby zaznaczyć / odznaczyć wiele grup.',
	'default_group' => 'Czy grupa jest grupą domyślną(dla nowych użytkowników)?',
	'user_id' => 'Numer użytkownika',
	'uuid' => 'Identyfikator UUID',
	'group_order' => 'Kolejność wyświetlania',
	'group_created_successfully' => 'Grupa została pomyślnie utworzona.',
	'group_updated_successfully' => 'Grupa została pomyślnie zaktualizowana.',
	'group_deleted_successfully' => 'Grupa została pomyślnie usunięta.',
	'unable_to_delete_group' => 'Nie można usunąć domyślnej grupy lub grupy, która ma dostęp do panelu administratora. Najpierw zmień ustawienia grupy!',
	'can_view_staffcp' => 'Czy użytkownik tej grupy może mieć dostęp do panelu administratora?',
	'user' => 'Użytkownik',
	'user_validated_successfully' => 'Użytkownik pomyślnie aktywowany.',
	'user_updated_successfully' => 'Użytkownik został pomyślnie zaktualizowany.',
	'editing_user_x' => 'Edytowanie użytkownika: {x}', // Nie usuwaj zmiennej {x}
	'details' => 'Dane',

	// Uprawnienia
	'select_all' => 'Zaznacz wszystkich',
	'deselect_all' => 'Odznacz wszystkich',
	'background_image' => 'Zdjęcie w tle',
	'can_edit_own_group' => 'Może edytować uprawnienia do własnych grup',
	'permissions_updated_successfully' => 'Uprawnienia zostały pomyślnie zaktualizowane.',
	'cant_edit_this_group' => 'Nie możesz edytować uprawnień tej grupy!',

	// Ogólny język administratora
	'task_successful' => 'Zadanie zakończone powodzeniem.',
	'invalid_action' => 'Nieprawidłowa czynność.',
	'enable_night_mode' => 'Włącz tryb nocny',
	'disable_night_mode' => 'Wyłącz tryb nocny',
	'view_site' => 'Podgląd strony',
	'signed_in_as_x' => 'Zalogowany jako: {x}', // Nie usuwaj zmiennej {x}
    'warning' => 'Warning',

    // Konserwacja
    'maintenance_mode' => 'Tryb konserwacji',
    'maintenance_enabled' => 'Tryb konserwacji jest obecnie włączony.',
    'enable_maintenance_mode' => 'Włączyć tryb konserwacji?',
    'maintenance_mode_message' => 'Komunikat trybu konserwacji',
    'maintenance_message_max_1024' => 'Upewnij się, że komunikat o konserwacji zawiera maksymalnie 1024 znaki.',

	// Bezpieczeństwo
	'acp_logins' => 'Logowania do panelu administratora',
	'please_select_logs' => 'Please select logs to view',
	'ip_address' => 'Adres IP',
	'template_changes' => 'Zmiany w szablonach',
	'file_changed' => 'Zmieniono plik',
	'all_logs' => 'Wszystkie dzienniki',
	'action' => 'Akcja',
	'action_info' => 'Informacje o akcji',
    
	// Aktualizacje
	'update' => 'Aktualizacje',
	'current_version_x' => 'Obecna wersja: <strong>{x}</strong>', // Nie usuwaj zmiennej {x}
	'new_version_x' => 'Nowa wersja: <strong>{x}</strong>', // Nie usuwaj zmiennej {x}
	'new_update_available' => 'Dostępna jest nowa aktualizacja.',
	'new_urgent_update_available' => 'Dostępna jest nowa aktualizacja. Zaktualizuj tak szybko, jak to możliwe!',
	'up_to_date' => 'NamelessMC jest aktualne!',
	'urgent' => 'Ta aktualizacja jest pilną aktualizacją',
	'changelog' => 'Zmiany',
	'update_check_error' => 'Wystąpił błąd podczas sprawdzania aktualizacji:',
	'instructions' => 'Instrukcja',
	'download' => 'Pobierz',
	'install_confirm' => 'Upewnij się, że pobrałeś pakiet i wczytałeś zawarte pliki!',
	'check_again' => 'Sprawdź ponownie',

	// Widżety
	'widgets' => 'Widżety',
	'widget_enabled' => 'Widget enabled.',
	'widget_disabled' => 'Widget disabled.',
	'widget_updated' => 'Zaktualizowano widżet.',
	'editing_widget_x' => 'Edycja widżetu: {x}', // Nie usuwaj zmiennej {x}
	'module_x' => 'Moduł: {x}', // Nie usuwaj zmiennej {x}
	'widget_order' => 'Kolejność wyświetlania',

    // Widżet użytkowników online
    'include_staff_in_user_widget' => 'Uwzględnić członków administracji w widżecie dostępnych użytkowników?',

	// Strony niestandardowe
	'pages' => 'Strony',
	'custom_pages' => 'Strony niestandardowe',
	'new_page' => '<i class="fa fa-plus-circle"></i> Nowa strona',
	'no_custom_pages' => 'Nie utworzono jeszcze stron niestandardowych.',
	'creating_new_page' => 'Tworzenie strony',
	'page_title' => 'Tytuł strony',
	'page_path' => 'Ścieżka strony (z poprzedzeniem /, np. /przykład)',
	'page_icon' => 'Ikona strony',
	'page_link_location' => 'Lokalizacja łącza strony',
	'page_link_navbar' => 'Nawigacja',
	'page_link_footer' => 'Stopka',
	'page_link_more' => 'Lista rozwijana "Więcej" ',
	'page_link_none' => 'Brak łącza',
	'page_content' => 'Treść strony',
	'page_redirect' => 'Przekierowanie strony?',
	'page_redirect_to' => 'Link przekierowujący (z poprzedzającym http://)',
	'unsafe_html' => 'Zezwalać na niebezpieczny kod HTML?',
	'unsafe_html_warning' => 'Włączenie tej opcji oznacza, że na stronie można użyć dowolnego kodu HTML, w tym potencjalnie niebezpiecznego kodu JavaScript. Włącz tą opcje tylko, gdy masz pewność, że Twój kod HTML jest bezpieczny.',
	'include_in_sitemap' => 'Uwzględnić w mapie witryny?',
	'sitemap_link' => 'Link do mapy witryny:',
	'page_permissions' => 'Uprawnienia grup na stronie',
	'view_page' => 'Kto może zobaczyć tą stronę?',
	'editing_page_x' => 'Edytowanie strony {x}', // Nie usuwaj zmiennej {x}
    'unable_to_create_page' => 'Nie można utworzyć strony:',
	'page_title_required' => 'Tytuł strony jest wymagany.',
	'page_url_required' => 'Ścieżka strony jest wymagana.',
	'link_location_required' => 'Lokalizacja łącza jest wymagana.',
	'page_title_minimum_2' => 'Tytuł strony musi mieć co najmniej 2 znaki.',
	'page_url_minimum_2' => 'Ścieżka strony musi mieć co najmniej 2 znaki.',
	'page_title_maximum_30' => 'Tytuł strony nie może przekraczać 30 znaków.',
	'page_icon_maximum_64' => 'Link do ikony strony musi mieć maksymalnie 64 znaki.',
	'page_url_maximum_20' => 'Ścieżka strony musi mieć maksymalnie 20 znaków.',
	'page_content_maximum_100000' => 'Zawartość strony nie może przekraczać 100 000 znaków.',
	'page_redirect_link_maximum_512' => 'Link przekierowania strony może mieć maksymalnie 512 znaków.',
	'confirm_delete_page' => 'Czy na pewno chcesz usunąć tę stronę??',
	'page_created_successfully' => 'Strona  została pomyślnie utworzona .',
	'page_updated_successfully' => 'Strona została pomyślnie zaktualizowana.',
	'page_deleted_successfully' => 'Strona została pomyślnie usunięta.',

	// API
    'api' => 'API',
	'enable_api' => 'Włączyć interfejs API?',
	'api_info' => 'Interfejs API umożliwia wtyczkom i innym usługom interakcję z witryną, na przykład <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >oficjalną wtyczkę Nameless</a>.',
	'enable_legacy_api' => 'Włączyć starszą wersję interfejsu API?',
	'legacy_api_info' => 'Starsza wersja interfejsu API pozwala wtyczkom używającym starszej wersji Nameless API v1 do pracy z wersją v2.',
	'confirm_api_regen' => 'Czy na pewno chcesz zmienić klucz interfejsu API?',
	'api_key' => 'Klucz API',
	'api_url' => 'Link API',
	'copy' => 'Kopiuj',
	'api_key_regenerated' => 'Klucz API został pomyślnie zmieniony.',
	'api_registration_email' => 'API e-mail rejestracyjny',
	'show_registration_link' => 'Pokaż link rejestracyjny',
	'registration_link' => 'Link rejestracyjny',
	'link_to_complete_registration' => 'Link do potwierdzenia rejestracji: {x}', // Nie usuwaj zmiennej {x}
	'api_verification' => 'Włączyć weryfikację interfejsu API??',
	'api_verification_info' => 'Jeśli opcja jest włączona, konta można weryfikować tylko za pomocą interfejsu API, na przykład w grze przy użyciu oficjalnej wtyczki Nameless. <strong>Ta opcja zastąpi weryfikację adresu e-mail, a konta zostaną automatycznie aktywowane!</strong><br />Powinieneś skonfigurować domyślną grupę, aby miały ograniczone uprawnienia, a następnie zaktualizować grupę sprawdzania poprawności w zakładce AdminCP -> System -> Rejestracja do grupy członków z normalnymi uprawnieniami.',
	'enable_username_sync' => 'Włączyć synchronizację nazwy użytkownika?',
	'enable_username_sync_info' => 'Jeśli ta opcja jest włączona, nazwy użytkowników witryny będą aktualizowane tak, aby pasowały do nazw użytkowników w grze.',
	'api_settings_updated_successfully' => 'Ustawienia API zostały pomyślnie zaktualizowane.',
	'group_sync' => 'Synchronizacja grupy',
	'group_sync_info' => 'Możesz skonfigurować interfejs API tak, aby automatycznie aktualizował grupę użytkownika na stronie, gdy zmieni się jego grupa w grze. Po prostu wprowadź nazwę grupy w grze i grupę na stronie, która powinna zostać zsynchronizowana.',
	'ingame_group' => 'Nazwa grupy w grze',
	'website_group' => 'Grupa ze strony',
	'set_as_primary_group' => 'Ustawić jako grupę podstawową?',
	'set_as_primary_group_info' => 'Jeśli ta opcja jest włączona, podstawowa grupa witryn użytkownika zostanie zaktualizowana. Jeśli wyłączone, grupa w grze zostanie dodana do drugorzędnych grup witryny użytkownika.',
	'ingame_group_maximum' => 'Upewnij się, że nazwa grupy ma maksymalnie 64 znaki.',
	'select_website_group' => 'Wybierz grupę na stronie.',
	'ingame_group_already_exists' => 'Reguła synchronizacji rang została już utworzona dla takiej grupy z gry.',
	'group_sync_rule_created_successfully' => 'Reguła synchronizacji grupy została pomyślnie utworzona.',
	'group_sync_rules_updated_successfully' => 'Reguły synchronizacji grup zostały pomyślnie zaktualizowane.',
	'group_sync_rule_deleted_successfully' => 'Reguła synchronizacji grupy została pomyślnie usunięta.',
	'existing_rules' => 'Istniejące reguły',
	'new_rule' => 'Nowa reguła',

	// Przesyłanie plików
	'drag_files_here' => 'Przeciągnij pliki tutaj, aby przesłać.',
	'invalid_file_type' => 'Nieprawidłowy typ pliku!',
	'file_too_big' => 'Plik jest za duży! Twój plik ma {{filesize}}, a limit to {{maxFilesize}}', // Nie usuwaj zmiennej {{filesize}} i {{maxFilesize}}
	'allowed_proxies' => 'Dozwolone proxy',
	'allowed_proxies_info' => 'Rozdzielona wierszami lista dozwolonych adresów IP proxy.',

	// Dziennik błędów
	'error_logs' => 'Dziennik błędów',
	'notice_log' => 'Dziennik powiadomień',
	'warning_log' => 'Dziennik ostrzeżeń',
	'custom_log' => 'Niestandardowy dziennik',
	'other_log' => 'Inny dziennik',
	'fatal_log' => 'Dziennik krytyczny',
	'log_file_not_found' => 'Nie znaleziono pliku dziennika.',
	'log_purged_successfully' => 'Dziennik został pomyślnie wyczyszczony.',

	// Hooks
	'discord_hooks' => 'Discord Hooks',
	'discord_hooks_info' => 'Wysyła wiadomość na kanał Discord, gdy coś dzieje się na Twojej stronie. Utwórz Discord hook w ustawieniach serwera Discord -> zakładka Webhooks.',
	'discord_hook_url' => 'Link do Discord webhook',
	'discord_hook_events' => 'Włącz zdarzenia Discord hook (Ctrl+LPM aby wybrać wiele zdarzeń)',
	'register_hook_info' => 'Rejestracja użytkownika',
	'validate_hook_info' => 'Walidacja użytkownika',
	'delete_hook_info' => 'Usunięcie użytkownika',

	// Mapa witryny
	'unable_to_load_sitemap_file_x' => 'Nie można załadować pliku mapy witryny {x}', // Nie usuwaj zmiennej {x}
	'sitemap_generated' => 'Wygenerowano mapę witryny',
	'sitemap_not_writable' => 'Katalog <strong>cache/sitemaps</strong> nie jest zapisywalny.',
	'cache_not_writable' => 'Katalog <strong>cache</strong> nie jest zapisywalny.',
	'generate_sitemap' => 'Wygeneruj mapę witryny',
	'download_sitemap' => 'Pobierz mapę witryny',
	'sitemap_not_generated_yet' => 'Mapa witryny nie została jeszcze wygenerowana!',
	'sitemap_last_generated_x' => 'Mapa witryny została ostatnio wygenerowana {x}', // Nie usuwaj zmiennej {x}

	// Metadane strony
	'page_metadata' => 'Metadane strony',
	'metadata_page_x' => 'Wyświetlanie metadanych dla strony {x}', // Nie usuwaj zmiennej {x}
	'keywords' => 'Słowa kluczowe',
	'description_max_500' => 'Opis musi posiadać co najwyżej 500 znaków.',
	'page' => 'Strona',
	'metadata_updated_successfully' => 'Metadane zostały pomyślnie zaktualizowane.',

	// Panel
	'total_users' => 'Użytkownicy',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'Nowi użytkownicy',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Średnia liczba graczy',
	'nameless_news' => 'Aktualności NamelessMC',
	'unable_to_retrieve_nameless_news' => 'Nie można pobrać najnowszych wiadomości',
	'confirm_leave_site' => 'Za chwilę opuścisz tę stronę! Czy na pewno chcesz odwiedzić <strong id="leaveSiteURL">{x}</strong>?', // Nie usuwaj zmiennej {x} i upewnij się, że ma odpowiednie id, czyli leaveSiteURL
	'server_compatibility' => 'Zgodność serwera',
	'issues' => 'Problemy',

	// Inne
	'source' => 'Źródło',
	'support' => 'Pomoc',
	'admin_dir_still_exists' => 'Uwaga! Katalog <strong>modules/Core/pages/admin</strong> nadal istnieje. Proszę usunąć ten katalog.',
	'mod_dir_still_exists' => 'Uwaga! Katalog <strong>modules/Core/pages/mod</strong> nadal istnieje. Proszę usunąć ten katalog.'
);