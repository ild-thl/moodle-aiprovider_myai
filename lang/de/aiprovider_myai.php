<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * German language pack for MyAI
 *
 * @package    aiprovider_myai
 * @copyright  2025 Jan Rieger <jan.rieger@th-luebeck.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:extract_pdf:model'] = 'KI-Modell';
$string['action:extract_pdf:model_desc'] = 'Das Modell, das verwendet wird, um den Inhalt der PDF-Datei zu extrahieren.';
$string['action:extract_pdf:endpoint'] = 'API endpoint';
$string['action:extract_pdf:systeminstruction'] = 'Systemanweisung';
$string['action:extract_pdf:systeminstruction_desc'] = 'Diese Anweisung wird zusammen mit der Eingabe des Benutzers an das KI-Modell gesendet. Es wird nicht empfohlen, diese Anweisung zu bearbeiten, es sei denn, es ist absolut erforderlich.';
$string['action:generate_image:endpoint'] = 'API endpoint';
$string['action:generate_image:model'] = 'KI-Modell';
$string['action:generate_image:model_desc'] = 'Das Modell, das verwendet wird, um Bilder aus Benutzereingaben zu generieren.';
$string['action:generate_text:endpoint'] = 'API endpoint';
$string['action:generate_text:model'] = 'KI-Modell';
$string['action:generate_text:model_desc'] = 'Das Modell, das verwendet wird, um die Textantwort zu generieren.';
$string['action:generate_text:systeminstruction'] = 'Systemanweisung';
$string['action:generate_text:systeminstruction_desc'] = 'Diese Anweisung wird zusammen mit der Eingabe des Benutzers an das KI-Modell gesendet. Es wird nicht empfohlen, diese Anweisung zu bearbeiten, es sei denn, es ist absolut erforderlich.';
$string['action:summarise_text:endpoint'] = 'API endpoint';
$string['action:summarise_text:model'] = 'KI-Modell';
$string['action:summarise_text:model_desc'] = 'Das Modell, das verwendet wird, um den bereitgestellten Text zusammenzufassen.';
$string['action:summarise_text:systeminstruction'] = 'Systemanweisung';
$string['action:summarise_text:systeminstruction_desc'] = 'Diese Anweisung wird zusammen mit der Eingabe des Benutzers an das KI-Modell gesendet. Es wird nicht empfohlen, diese Anweisung zu bearbeiten, es sei denn, es ist absolut erforderlich.';
$string['action_extract_pdf'] = 'PDF-Inhalt extrahieren';
$string['apikey'] = 'API key';
$string['apikey_desc'] = 'Erhalten Sie einen Schlüssel von Ihrem KI-Anbieter</a>.';
$string['description'] = 'Extrahiert den Inhalt einer PDF-Datei und gibt ihn als Klartext zurück.';
$string['enableglobalratelimit'] = 'Limit für die gesamte Seite festlegen';
$string['enableglobalratelimit_desc'] = 'Begrenzen Sie die Anzahl der Anfragen, die der KI API-Anbieter pro Stunde von der gesamten Seite empfangen kann.';
$string['enableuserratelimit'] = 'Limit für Benutzer festlegen';
$string['enableuserratelimit_desc'] = 'Begrenzen Sie die Anzahl der Anfragen, die jeder Benutzer pro Stunde an den KI API-Anbieter stellen kann.';
$string['globalratelimit'] = 'Maximale Anzahl von Anfragen für die gesamte Seite';
$string['globalratelimit_desc'] = 'Die Anzahl der Anfragen, die pro Stunde für die gesamte Seite erlaubt sind.';
$string['orgid'] = 'Organisations-ID';
$string['orgid_desc'] = 'Erhalten Sie eine Organisations-ID von Ihrem KI-Anbieter</a>.';
$string['pluginname'] = 'MyAI';
$string['privacy:metadata'] = 'Das KI API-Anbieter-Plugin speichert keine personenbezogenen Daten.';
$string['privacy:metadata:aiprovider_myai:externalpurpose'] = 'Diese Informationen werden an die KI API gesendet, damit eine Antwort generiert werden kann. Ihre KI-Kontoeinstellungen können ändern, wie KI diese Daten speichert und aufbewahrt. Es werden keine Benutzerdaten explizit an KI gesendet oder in Moodle LMS von diesem Plugin gespeichert.';
$string['privacy:metadata:aiprovider_myai:model'] = 'Das Modell, das verwendet wird, um die Antwort zu generieren.';
$string['privacy:metadata:aiprovider_myai:numberimages'] = 'Die Anzahl der Bilder, die in der Antwort verwendet werden.';
$string['privacy:metadata:aiprovider_myai:prompttext'] = 'Texteingabe des Nutzers, die verwendet wird, um die Antwort zu generieren.';
$string['privacy:metadata:aiprovider_myai:responseformat'] = 'Das Format der Antwort bei der Bilderzeugung.';
$string['userratelimit'] = 'Maximale Anzahl von Anfragen pro Benutzer';
$string['userratelimit_desc'] = 'Die Anzahl der Anfragen, die pro Stunde und pro Benutzer erlaubt sind.';
