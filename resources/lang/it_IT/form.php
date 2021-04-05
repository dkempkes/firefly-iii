<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                   => 'Nome banca',
    'bank_balance'                => 'Saldo',
    'savings_balance'             => 'Saldo risparmi',
    'credit_card_limit'           => 'Limite carta di credito',
    'automatch'                   => 'Abbina automaticamente',
    'skip'                        => 'Salta ogni',
    'enabled'                     => 'Abilitata',
    'name'                        => 'Nome',
    'active'                      => 'Attivo',
    'amount_min'                  => 'Importo minimo',
    'amount_max'                  => 'Importo massimo',
    'match'                       => 'Abbina con',
    'strict'                      => 'Modalità severa',
    'repeat_freq'                 => 'Si ripete',
    'object_group'                => 'Gruppo',
    'location'                    => 'Posizione',
    'update_channel'              => 'Canale di aggiornamento',
    'currency_id'                 => 'Valuta',
    'transaction_currency_id'     => 'Valuta',
    'auto_budget_currency_id'     => 'Valuta',
    'external_ip'                 => 'L\'IP esterno del tuo server',
    'attachments'                 => 'Allegati',
    'BIC'                         => 'BIC',
    'verify_password'             => 'Verifica password di sicurezza',
    'source_account'              => 'Conto di origine',
    'destination_account'         => 'Conto destinazione',
    'asset_destination_account'   => 'Conto di destinazione',
    'include_net_worth'           => 'Includi nel patrimonio',
    'asset_source_account'        => 'Conto di origine',
    'journal_description'         => 'Descrizione',
    'note'                        => 'Note',
    'currency'                    => 'Valuta',
    'account_id'                  => 'Conto attività',
    'budget_id'                   => 'Budget',
    'opening_balance'             => 'Saldo di apertura',
    'tagMode'                     => 'Modalità etichetta',
    'virtual_balance'             => 'Saldo virtuale',
    'targetamount'                => 'Importo obiettivo',
    'account_role'                => 'Ruolo del conto',
    'opening_balance_date'        => 'Data saldo di apertura',
    'cc_type'                     => 'Piano di pagamento della carta di credito',
    'cc_monthly_payment_date'     => 'Data di addebito mensile della carta di credito',
    'piggy_bank_id'               => 'Salvadanaio',
    'returnHere'                  => 'Ritorna qui',
    'returnHereExplanation'       => 'Dopo averlo archiviato, torna qui per crearne un altro.',
    'returnHereUpdateExplanation' => 'Dopo l\'aggiornamento, torna qui.',
    'description'                 => 'Descrizione',
    'expense_account'             => 'Conto spese',
    'revenue_account'             => 'Conto entrate',
    'decimal_places'              => 'Decimali',
    'destination_amount'          => 'Importo (destinazione)',
    'new_email_address'           => 'Nuovo indirizzo email',
    'verification'                => 'Verifica',
    'api_key'                     => 'Chiave API',
    'remember_me'                 => 'Ricordami',
    'liability_type_id'           => 'Tipo passività',
    'interest'                    => 'Interesse',
    'interest_period'             => 'Periodo di interesse',

    'type'               => 'Tipo',
    'convert_Withdrawal' => 'Converti prelievo',
    'convert_Deposit'    => 'Converti entrata',
    'convert_Transfer'   => 'Converti trasferimento',

    'amount'                      => 'Importo',
    'foreign_amount'              => 'Importo estero',
    'date'                        => 'Data',
    'interest_date'               => 'Data di valuta',
    'book_date'                   => 'Data contabile',
    'process_date'                => 'Data elaborazione',
    'category'                    => 'Categoria',
    'tags'                        => 'Etichette',
    'deletePermanently'           => 'Elimina definitivamente',
    'cancel'                      => 'Annulla',
    'targetdate'                  => 'Data fine',
    'startdate'                   => 'Data inizio',
    'tag'                         => 'Etichetta',
    'under'                       => 'Sotto',
    'symbol'                      => 'Simbolo',
    'code'                        => 'Codice',
    'iban'                        => 'IBAN',
    'account_number'              => 'Numero conto',
    'creditCardNumber'            => 'Numero carta di credito',
    'has_headers'                 => 'Intestazioni',
    'date_format'                 => 'Formato data',
    'specifix'                    => 'Correzioni bancarie o file specifiche',
    'attachments[]'               => 'Allegati',
    'title'                       => 'Titolo',
    'notes'                       => 'Note',
    'filename'                    => 'Nome file',
    'mime'                        => 'Tipo Mime',
    'size'                        => 'Dimensione',
    'trigger'                     => 'Trigger',
    'stop_processing'             => 'Interrompere l\'elaborazione',
    'start_date'                  => 'Inizio intervallo',
    'end_date'                    => 'Fine intervallo',
    'start'                       => 'Inizio intervallo',
    'end'                         => 'Fine intervallo',
    'delete_account'              => 'Elimina conto ":name"',
    'delete_bill'                 => 'Elimina bolletta ":name"',
    'delete_budget'               => 'Elimina budget ":name"',
    'delete_category'             => 'Elimina categoria ":name"',
    'delete_currency'             => 'Elimina valuta ":name"',
    'delete_journal'              => 'Elimina transazione con descrizione ":description"',
    'delete_attachment'           => 'Elimina allegato ":name"',
    'delete_rule'                 => 'Elimina regola ":title"',
    'delete_rule_group'           => 'Elimina gruppo regole":title"',
    'delete_link_type'            => 'Elimina tipo collegamento ":name"',
    'delete_user'                 => 'Elimina utente ":email"',
    'delete_recurring'            => 'Elimina transazione ricorrente ":title"',
    'user_areYouSure'             => 'Se cancelli l\'utente ":email", verrà eliminato tutto. Non sarà più possibile recuperare i dati eliminati. Se cancelli te stesso, perderai l\'accesso a questa istanza di Firefly III.',
    'attachment_areYouSure'       => 'Sei sicuro di voler eliminare l\'allegato ":name"?',
    'account_areYouSure'          => 'Sei sicuro di voler eliminare il conto ":name"?',
    'account_areYouSure_js'       => 'Sei sicuro di voler eliminare il conto "{name}"?',
    'bill_areYouSure'             => 'Sei sicuro di voler eliminare il conto ":name"?',
    'rule_areYouSure'             => 'Sei sicuro di voler eliminare la regola ":title"?',
    'object_group_areYouSure'     => 'Sei sicuro di voler eliminare il gruppo ":title"?',
    'ruleGroup_areYouSure'        => 'Sei sicuro di voler eliminare il gruppo regole ":title"?',
    'budget_areYouSure'           => 'Sei sicuro di voler eliminare il budget ":name"?',
    'category_areYouSure'         => 'Sei sicuro di voler eliminare categoria ":name"?',
    'recurring_areYouSure'        => 'Sei sicuro di voler eliminare la transazione ricorrente ":title"?',
    'currency_areYouSure'         => 'Sei sicuro di voler eliminare la valuta ":name"?',
    'piggyBank_areYouSure'        => 'Sei sicuro di voler eliminare il salvadanaio ":name"?',
    'journal_areYouSure'          => 'Sei sicuro di voler eliminare la transazione ":description"?',
    'mass_journal_are_you_sure'   => 'Sei sicuro di voler eliminare queste transazioni?',
    'tag_areYouSure'              => 'Sei sicuro di voler eliminare l\'etichetta ":tag"?',
    'journal_link_areYouSure'     => 'Sei sicuro di voler eliminare il collegamento tra <a href=":source_link">:source</a> e <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => 'Sei sicuro di voler eliminare il tipo di collegamento ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'L\'eliminazione dei dati da Firefly III è definitiva e non può essere annullata.',
    'mass_make_selection'         => 'Puoi comunque impedire l\'eliminazione degli elementi rimuovendo la spunta nella casella di controllo.',
    'delete_all_permanently'      => 'Elimina selezionati definitamente',
    'update_all_journals'         => 'Aggiorna queste transazioni',
    'also_delete_transactions'    => 'Anche l\'unica transazione collegata a questo conto verrà eliminata.|Anche tutte le :count transazioni collegate a questo conto verranno eliminate.',
    'also_delete_transactions_js' => 'Nessuna transazioni|Anche l\'unica transazione collegata al conto verrà eliminata.|Anche tutte le {count} transazioni collegati a questo conto verranno eliminate.',
    'also_delete_connections'     => 'L\'unica transazione collegata a questo tipo di collegamento perderà questa connessione. | Tutto :count le transazioni di conteggio collegate a questo tipo di collegamento perderanno la connessione.',
    'also_delete_rules'           => 'Anche l\'unica regola collegata a questo gruppo di regole verrà eliminata. | Tutto :count verranno eliminate anche le regole di conteggio collegate a questo gruppo di regole.',
    'also_delete_piggyBanks'      => 'Verrà eliminato anche l\'unico salvadanaio collegato a questo conto. | Tutti :count il conteggio del salvadanaio collegato a questo conto verrà eliminato.',
    'also_delete_piggyBanks_js'   => 'Nessun salvadanaio|Anche l\'unico salvadanaio collegato a questo conto verrà eliminato.|Anche tutti i {count} salvadanai collegati a questo conto verranno eliminati.',
    'not_delete_piggy_banks'      => 'Il salvadanaio collegato a questo gruppo non verrà eliminato.|I :count salvadanai collegati a questo gruppo non verranno eliminati.',
    'bill_keep_transactions'      => 'L\'unica transazione connessa a questa bolletta non verrà eliminata.|Tutte le :count transazioni del conto collegate a questa bolletta non verranno cancellate.',
    'budget_keep_transactions'    => 'L\'unica transazione collegata a questo budget non verrà eliminata.|Tutte le :count transazioni del conto collegate a questo budget non verranno cancellate.',
    'category_keep_transactions'  => 'L\'unica transazione collegata a questa categoria non verrà eliminata.|Tutte le :count transazioni del conto collegate a questa categoria non verranno cancellate.',
    'recurring_keep_transactions' => 'L\'unica transazione creata da questa transazione ricorrente non verrà eliminata.|Tutte le :count transazioni create da questa transazione ricorrente non verranno eliminate.',
    'tag_keep_transactions'       => 'L\'unica transazione connessa a questa etichetta non verrà eliminata.|Tutte le :count transazioni del conto collegate a questa etichetta non verranno eliminate.',
    'check_for_updates'           => 'Controlla gli aggiornamenti',

    'delete_object_group' => 'Elimina gruppo ":title"',

    'email'                 => 'Indirizzo email',
    'password'              => 'Password',
    'password_confirmation' => 'Password (ancora)',
    'blocked'               => 'È bloccato?',
    'blocked_code'          => 'Motivo del blocco',
    'login_name'            => 'Login',
    'is_owner'              => 'È amministratore?',

    // import
    'apply_rules'           => 'Applica regole',
    'artist'                => 'Artista',
    'album'                 => 'Album',
    'song'                  => 'Brano',


    // admin
    'domain'                => 'Dominio',
    'single_user_mode'      => 'Disabilita registrazione utente',
    'is_demo_site'          => 'È un sito demo',

    // import
    'configuration_file'    => 'Configurazione file',
    'csv_comma'             => 'Una virgola (,)',
    'csv_semicolon'         => 'Un punto e virgola (;)',
    'csv_tab'               => 'Una tabulazione (invisibile)',
    'csv_delimiter'         => 'Delimitatore campi CSV',
    'client_id'             => 'Client ID',
    'app_id'                => 'ID dell\'app',
    'secret'                => 'Segreto',
    'public_key'            => 'Chiave Pubblica',
    'country_code'          => 'Codice Nazione',
    'provider_code'         => 'Banca o fornitore di dati',
    'fints_url'             => 'URL API FinTS',
    'fints_port'            => 'Porta',
    'fints_bank_code'       => 'Codice banca',
    'fints_username'        => 'Nome utente',
    'fints_password'        => 'PIN / Password',
    'fints_account'         => 'Conto FinTS',
    'local_account'         => 'Conto Firefly III',
    'from_date'             => 'Data inizio',
    'to_date'               => 'Alla data',


    'due_date'                => 'Data scadenza',
    'payment_date'            => 'Data pagamento',
    'invoice_date'            => 'Data fatturazione',
    'internal_reference'      => 'Riferimento interno',
    'inward'                  => 'Descrizione in ingresso',
    'outward'                 => 'Descrizione in uscita',
    'rule_group_id'           => 'Gruppo regole',
    'transaction_description' => 'Descrizione transazione',
    'first_date'              => 'Prima volta',
    'transaction_type'        => 'Tipo transazione',
    'repeat_until'            => 'Ripeti fino a',
    'recurring_description'   => 'Descrizione transazione ricorrente',
    'repetition_type'         => 'Tipo ripetizione',
    'foreign_currency_id'     => 'Valuta estera',
    'repetition_end'          => 'La ripetizione termina il',
    'repetitions'             => 'Ripetizioni',
    'calendar'                => 'Calendario',
    'weekend'                 => 'Fine settimana',
    'client_secret'           => 'Segreto del client',

    'withdrawal_destination_id' => 'Conto di destinazione',
    'deposit_source_id'         => 'Conto di origine',
    'expected_on'               => 'Prevista il',
    'paid'                      => 'Pagata',

    'auto_budget_type'   => 'Budget automatico',
    'auto_budget_amount' => 'Importo budget automatico',
    'auto_budget_period' => 'Periodo budget automatico',

    'collected' => 'Raccolti',
    'submitted' => 'Inviati',
    'key'       => 'Chiave',
    'value'     => 'Contenuto dei dati',


];
