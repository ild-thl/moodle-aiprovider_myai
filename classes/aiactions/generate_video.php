<?php
namespace aiprovider_myai\aiactions;

defined('MOODLE_INTERNAL') || die();

/**
 * Action: generate_video
 *
 */
class generate_video extends \core_ai\aiactions\base {
    /**
     * Create a new instance of the generate_text action.
     *
     * It’s responsible for performing any setup tasks,
     * such as getting additional data from the database etc.
     *
     * @param int $contextid The context id the action was created in.
     * @param int $userid The user id making the request.
     * @param string $prompttext The prompt text used to process the image.
     */
    public function __construct(
        protected int $userid,
        protected string $textcontent,
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
        return 'myai_generate_video';
    }

    /**
     * Beschreibung für Admin-Oberflächen.
     */
    public static function get_description(): string {
        return get_string('generate_video_description', 'aiprovider_myai');
    }

    /**
     * Standard-System-Instruktion (wird z.B. als Default in den Provider-Settings verwendet).
     */
    public static function get_system_instruction(): string {
        return get_string('generate_video_systeminstruction', 'aiprovider_myai');
    }

    /**
     * Speichert Action-spezifische Daten (minimal implementiert).
     * Passe die Signatur/Logik an, falls deine Action andere Anforderungen hat.
     *
     * @param array $data
     * @return array
     */
    public function store(\core_ai\aiactions\responses\response_base $response): int {
                // generate unique int id
        $uniqueid = random_int(1, 9999999999); // Todo: Replace with actual storage logic
        return $uniqueid;
    }

    public static function get_response_classname(): string {
        return \aiprovider_myai\aiactions\responses\response_generate_video::class;
    }
}