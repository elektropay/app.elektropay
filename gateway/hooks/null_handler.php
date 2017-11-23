<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author:     Ehsaan Khatree
 * @version:    1.0
 * @uses:       Use this class in CodeIgniter Hook with 'display_override' hook point, function: '__construct'
 * @package:    CodeIgniter v2.1.3
 *
 */

class OutputHandler {

    private $CI;
    private $new_buffer;

    public function __construct() {
        // Instaniate CI Object to work with them..
        $this->CI =& get_instance();

        // Call all functions here to modify changes.
        $this->emptify();
    }

    public function __destruct() {
        if ( $this->new_buffer === NULL)
            $this->CI->output->set_output( $this->getOutput() );
        else
            $this->CI->output->set_output( $this->new_buffer );

        $this->CI->output->_display();
    }

    /**
     * Function to remove and set new modification in new buffer variable.
     */
    private function emptify() {
        $data = $this->CI->output->get_output();
        $data_decode = @json_decode( $data, TRUE );

        if ( is_array($data_decode) ) {
            $this->new_buffer = json_encode($this->emptyValues($data_decode));
        } else {
            $this->new_buffer = $data;
        }
    }

    /**
     * Usage: Convert null values in to empty string.
     * @return: array
     */
    private function emptyValues(&$arr) {
        if (is_array($arr)) {
            foreach ($arr as $key => $value) {
                if (is_array($value)) $arr[ $key ] = $this->emptyValues($value);
                if (is_null($value)) {
                    $arr[ $key ] = '';
                }
            }
        }
        return $arr;
    }

    /**
     * Return exact current output, no modification incurred at all.
     */
    private function getOutput() {
        return $this->CI->output->get_output();
    }
}
