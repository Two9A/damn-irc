<?php

require_once 'HTML5.php';
require_once 'HTML5/Elements.php';
require_once 'HTML5/Entities.php';
require_once 'HTML5/Exception.php';
require_once 'HTML5/InstructionProcessor.php';
require_once 'HTML5/Parser/CharacterReference.php';
require_once 'HTML5/Parser/EventHandler.php';
require_once 'HTML5/Parser/DOMTreeBuilder.php';
require_once 'HTML5/Parser/InputStream.php';
require_once 'HTML5/Parser/ParseError.php';
require_once 'HTML5/Parser/Scanner.php';
require_once 'HTML5/Parser/StringInputStream.php';
require_once 'HTML5/Parser/FileInputStream.php';
require_once 'HTML5/Parser/Tokenizer.php';
require_once 'HTML5/Parser/TreeBuildingRules.php';
require_once 'HTML5/Parser/UTF8Utils.php';
require_once 'HTML5/Serializer/HTML5Entities.php';
require_once 'HTML5/Serializer/RulesInterface.php';
require_once 'HTML5/Serializer/OutputRules.php';
require_once 'HTML5/Serializer/Traverser.php';

define('QP_NO_AUTOLOADER', true);
require_once 'qp.php';

?>
