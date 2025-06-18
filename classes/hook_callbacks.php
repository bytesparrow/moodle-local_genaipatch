<?php
namespace local_genaipatch;

defined('MOODLE_INTERNAL') || die();

class hook_callbacks {

    /**
     * Callback für before_footer_html_generation Hook.
     *
     * @return string HTML für vor dem Footer
     */
    public static function before_footer_html_generation(\core\hook\output\before_footer_html_generation $hook): void  {
        global $PAGE;
        #return;
				if (strpos($PAGE->url, 'bank/genai') !== false) {
          $PAGE->requires->js_call_amd('local_genaipatch/patchform', 'init');
        }
    }
}
