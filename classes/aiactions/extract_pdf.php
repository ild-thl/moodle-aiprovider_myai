<?php
namespace aiprovider_myai\aiactions;

defined('MOODLE_INTERNAL') || die();

/**
 * Action: extract_pdf
 *
 * TODO: Implementiere in execute() die eigentliche Extraktion (z.B. via externem Skript oder Bibliothek).
 */
class extract_pdf extends \core_ai\aiactions\base {
    /**
     * Create a new instance of the generate_text action.
     *
     * It’s responsible for performing any setup tasks,
     * such as getting additional data from the database etc.
     *
     * @param int $contextid The context id the action was created in.
     * @param int $userid The user id making the request.
     * @param string $prompttext The prompt text used to generate the image.
     */
    public function __construct(
        protected int $userid,
        protected string $imagebase64,
        protected string $prompttext,
        int $contextid,
    ) {
        parent::__construct($contextid);
    }

    /**
     * Get the action name.
     *
     * Defaults to the action name string.
     *
     * @return string
     */
    public static function get_name(): string {
        //return get_string('action_extract_pdf', 'aiprovider_myai');
        return 'myai_extract_pdf';
    }

    /**
     * Beschreibung für Admin-Oberflächen.
     */
    public static function get_description(): string {
        //return new \lang_string('action:extract_pdf:description', 'aiprovider_myai');
        return get_string('description', 'aiprovider_myai');
    }

    /**
     * Standard-System-Instruktion (wird z.B. als Default in den Provider-Settings verwendet).
     */
    public static function get_system_instruction(): string {
        return ''; // optional: Standard-Instruktion zurückgeben
    }

    /**
     * Speichert Action-spezifische Daten (minimal implementiert).
     * Passe die Signatur/Logik an, falls deine Action andere Anforderungen hat.
     *
     * @param array $data
     * @return array
     */
    public function store(\core_ai\aiactions\responses\response_base $response): int {
        // Todo: add install.xml DB table for storing extract_pdf actions
        // global $DB;

        // $responsearr = $response->get_response_data();

        // $record = new \stdClass();
        // $record->prompt = $this->prompttext;
        // $record->responseid = $responsearr['id']; // Can be null.
        // $record->fingerprint = $responsearr['fingerprint']; // Can be null.
        // $record->generatedcontent = $responsearr['generatedcontent']; // Can be null.
        // $record->finishreason = $responsearr['finishreason']; // Can be null.
        // $record->prompttokens = $responsearr['prompttokens']; // Can be null.
        // $record->completiontoken = $responsearr['completiontokens']; // Can be null.

        // return $DB->insert_record($this->get_tablename(), $record);

        // generate unique int id
        $uniqueid = random_int(1, 9999999999); // Todo: Replace with actual storage logic
        return $uniqueid;
    }

    public static function get_response_classname(): string {
        return \aiprovider_myai\aiactions\responses\response_extract_pdf::class;
    }
}