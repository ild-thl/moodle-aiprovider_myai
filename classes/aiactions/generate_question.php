<?php
namespace aiprovider_myai\aiactions;

defined('MOODLE_INTERNAL') || die();

/**
 * Action: generate_question
 *
 * @package    aiprovider_myai
 * @copyright  2025 Jan Rieger <jan.rieger@th-luebeck.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class generate_question extends \core_ai\aiactions\base {
    /**
     * Create a new instance of the generate_question action.
     *
     * @param int $contextid The context id the action was created in.
     * @param int $userid The user id making the request.
     * @param string $prompttext The prompt text used to generate the response.
     */
    public function __construct(
        protected int $userid,
        protected string $prompttext,
        int $contextid,
    ) {
        parent::__construct($contextid);
    }

    /**
     * Get the action name.
     *
     * @return string
     */
    public static function get_name(): string {
        return 'myai_generate_question';
    }

    /**
     * Description for admin user interfaces.
     *
     * @return string
     */
    public static function get_description(): string {
        return get_string('generate_question_description', 'aiprovider_myai');
    }

    /**
     * Default system instruction.
     *
     * @return string
     */
    public static function get_system_instruction(): string {
        return get_string('generate_question_systeminstruction', 'aiprovider_myai');
    }

    /**
     * Store action specific data.
     *
     * @param \core_ai\aiactions\responses\response_base $response
     * @return int
     */
    public function store(\core_ai\aiactions\responses\response_base $response): int {
        $uniqueid = random_int(1, 9999999999);
        return $uniqueid;
    }

    /**
     * @return string
     */
    public static function get_response_classname(): string {
        return \aiprovider_myai\aiactions\responses\response_generate_question::class;
    }
}
