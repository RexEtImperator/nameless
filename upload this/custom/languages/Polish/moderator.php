<?php 
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *  License: MIT
 *
 *  Translated by brzezinsky
 *
 *  Polish Language - Mod Panel
 *  Język polski - Panel moderatora
 */

$language = array(
	'mod_cp' => 'ModCP',
	'staff_cp' => 'ACP',
	'overview' => 'Panel',
	
	// Spam
	'spam' => 'Spam',
	'mark_as_spam' => 'Oznacz jako spam',
	'confirm_spam' => '<p>Czy na pewno chcesz oznaczyć tego użytkownika jako spam?</p><p>Użytkownik zostanie zablokowany IP, a cała jego zawartość zostanie usunięta.</p>',
	'user_marked_as_spam' => 'Użytkownik został oznaczony jako spam.',
	'cant_ban_admin' => 'Nie możesz zablokować administratora!',
	
	// Zobacz IP
	'ip_lookup' => 'Adresy IP',
	'search_for_ip' => 'Wyszukaj użytkownika lub jego adres IP',
	'no_ips_with_username' => 'Nie znaleziono adresów IP dla tego użytkownika.',
	'no_accounts_with_that_ip' => 'Nie znaleziono kont dla tego adresu IP.',
	'1_account_with_ip' => 'Znaleziono 1 konto z tym IP {y}', // Nie usuwaj zmiennej "{y}"
	'count_accounts_with_ip' => 'Znaleziono {x} konta z tym adresem IP {y}', // Nie usuwaj zmiennej "{x}" i "{y}"
	'1_ip_with_name' => 'Znaleziono 1 adres IP użytkownika {y}', // Nie usuwaj zmiennej "{y}"
	'count_ips_with_name' => 'Znaleziono {x} adresów IP użytkownika {y}', // Nie usuwaj zmiennej "{x}" i "{y}"
	'no_users_or_ips_found' => 'Nie znaleziono użytkowników ani adresów IP.',
	
	// Zgłoszenia
	'reports' => 'Zgłoszenia',
	'report_alert' => 'Przesłano nowe zgłoszenie',
	'user_reported' => 'Zgłoszony',
	'comments' => 'Komentarze',
	'updated_by' => 'Zaktualizowane przez',
	'actions' => 'Akcje',
	'view_closed' => 'Zobacz zamknięte',
	'view_open' => 'Zobacz otwarte',
	'viewing_report' => 'Wyświetlanie zgłoszenia',
	'view_content' => 'Zobacz zgłoszoną treść',
	'no_comments' => 'Brak komentarzy',
	'new_comment' => 'Nowy komentarz',
	'report_comment_invalid' => 'Invalid comment content. Please ensure you have entered a comment between 1 and 10000 characters.',
	'close_report' => 'Zamknij zgłoszenie',
	'reopen_report' => 'Ponownie otwórz zgłoszenie',
	'1_open_report' => 'Aktualnie jest <strong>1</strong> otwarte zgłoszenie.',
	'open_reports' => 'Aktualnie jest <strong>{x}</strong> otwartych zgłoszeń.', // Nie usuwaj zmiennej {x}
	'no_open_reports' => 'Obecnie nie ma otwartych raportów.',
	'no_closed_reports' => 'Obecnie nie ma zamkniętych raportów.',
	'recent_reports' => 'Najnowsze zgłoszenia',
	'reported_by' => 'Zgłoszony przez:',
	'website' => 'Strona',
	'ingame' => 'W grze',
	'x_closed_report' => '{x} zamknął to zgłoszenie.', // Nie usuwaj zmiennej {x} (nazwa użytkownika)
	'x_reopened_report' => '{x} ponownie otworzył to zgłoszenie.', // Nie usuwaj zmiennej {x} (nazwa użytkownika)
	'report_reopened' => 'zgłoszenie zostało ponownie otwarte.',
	'report_closed' => 'Zgłoszenie zostało pomyślnie zamknięte.',
	'comment_created' => 'Pomyślnie dodano komentarz.',
	
	// Kary
	'punishments' => 'Kary',
    'view_punishments' => 'Zobacz kary',
    'banned' => 'Zbanowany',
    'groups' => 'Grupy',
    'punish' => 'Ukaraj',
    'ban' => 'Zbanuj',
    'warn' => 'Ostrzeż',
    'ban_ip' => 'Zablokuj IP',
    'viewing_user_x' => 'Przeglądasz profil: {x}', // Nie usuwaj zmiennej {x}
    'previous_punishments' => 'Poprzednie kary',
    'no_previous_punishments' => 'Brak wcześniejszych kar',
    'warning' => 'Uwaga',
    'ip_ban' => 'Zablokuj IP',
    'reason' => 'Powód',
    'warn_user' => 'Ostrzeż',
    'ban_user' => 'Zablokuj użytkownika',
    'enter_valid_punishment_reason' => 'Podaj uzasadnienie od 5 do 5000 znaków.',
    'user_punished' => 'Użytkownik ukarany.',
    'user_punished_alert' => '{x} ukarał użytkownika {y}', // Nie usuwaj zmiennej {x} (administrator) i {y} (ukarany)
    'revoke' => 'Anuluj',
    'revoked' => 'Anulowano',
    'acknowledged' => 'Potwierdzono',
    'confirm_revoke_warning' => 'Czy na pewno chcesz anulować to ostrzeżenie??',
    'confirm_revoke_ban' => 'Czy na pewno chcesz anulować blokadę konta? Użytkownik zostanie odblokowany, nawet jeśli ma nowszy zakaz!',
    'punishment_revoked' => 'Kara odwołana.',
    'punishment_revoked_alert' => '{x} anulował karę dla użytkownika {y}', // Nie usuwaj zmiennej {x} (administrator) i {y} (użytkownik z odwołaną karą)
    'cant_punish_admin' => 'Nie możesz ukarać administratora!',
    'viewing_all_punishments' => 'Przeglądanie wszystkich kar',
    'no_punishments_found' => 'Nie znaleziono żadnych kar.',
    'view_user' => 'Zobacz',
    'when' => 'Kiedy',
    'staff' => 'Administrator',
    'type' => 'Typ',
	'recent_punishments' => 'Najnowsze kary',
	'created' => 'Stworzył:',
	'staff:' => 'Administrator:',
	'reason:' => 'Powód:',

	// Użytkownicy
	'recent_registrations' => 'Ostatnie rejestracje'

);