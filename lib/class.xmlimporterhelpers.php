<?php

	class XMLImporterHelpers {
		static function markdownify($string) {
			require_once(EXTENSIONS . '/xmlimporter/lib/markdownify/markdownify_extra.php');
			$markdownify = new Markdownify(true, MDFY_BODYWIDTH, false);

			$markdown = $markdownify->parseString($string);
			$markdown = htmlspecialchars($markdown, ENT_NOQUOTES, 'UTF-8');
			return $markdown;
		}

		static function dateFlip($string){
			$value = implode('/', array_reverse(explode('/', strtok($string, ' '))));
			return $value;
		}

		static function timeToDate($string){
			$value = date('r', $string);
			return $value;
		}

    static function booleanToCheckbox($string){
      if ($string === 'true') {
        return 'yes';
      }
      elseif ($string === 'false') {
        return 'no';
      }
      else {
        return '';
      }
    }

    static function returnCurrentDate($string) {
      $date = date('c');
      return $date;
    }

    static function commaSeparate($string) {
      $value = str_replace(' ', ', ', $string);
      return $value;
    }
  }
?>
