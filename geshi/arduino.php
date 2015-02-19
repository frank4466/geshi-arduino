<?php
/*************************************************************************************
 * arduino.php (based on c.php)
 * -----
 * Author: Nigel McNie (nigel@geshi.org)
 * Contributors:
 *  - Jack Lloyd (lloyd@randombit.net)
 *  - Michael Mol (mikemol@gmail.com)
 *  - Trimbitas Sorin-Iulian (trimbitassorin@hotmail.com)
 *  - Rick Winscot (rick.winscot@gmail.com)
 *
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.1
 * Date Started: 2009/08/09
 *
 * Arduino language file for GeSHi.
 *
 * CHANGES
 * -------
 *  2012/17/12 (1.0.1)
 *   -  Implemented REDIRECT for handling complex URLs (see: redirect.php )
 *   -  Added Arduino primary function reference links
 *  2009/08/09 (1.0.0)
 *   -  Forked / first release c.php 1.0.8.3 => arduino.php 1.0.0
 *
 * TODO (updated 2012/12/17)
 * -------------------------
 *  -  first, second, and fourth level reference links
 *  -  add drop-in support for libraries 
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/
$language_data = array (
    'LANG_NAME' => 'Arduino',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[\\\\abfnrtv\'\"?\n]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#"
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'if', 'return', 'while', 'case', 'continue',
			'default', 'do', 'else', 'for', 'switch', 'goto'
            ),
        2 => array(
            'null', 'false', 'break', 'true', 'function', 'enum', 'extern', 'inline', 'HIGH', 'LOW', 'INPUT', 'OUTPUT'
            ),
        3 => array(
            'pinMode', 'digitalWrite', 'digitalRead', 'analogRead', 'analogWrite', 'shiftOut', 'pulseIn',
			'millis', 'micros', 'delay', 'delayMicroseconds', 'min', 'max', 'abs', 'constrain', 'map', 'pow',
			'sq', 'sqrt', 'sin', 'cos', 'tan', 'randomSeed', 'random', 'Serial', 'sizeof', 'lowByte', 'highByte',
			'bitRead', 'bitWrite', 'bitSet', 'bitClear', 'bit', 'attachInterrupt', 'detachInterrupt', 'interrupts', 'noInterrupts', 'Serial', 'Stream', 'sizeof', 'Mouse', 'Keyboard'  
            ),
        4 => array(
            'void', 'boolean', 'char', 'const', 'unsigned', 'float', 'int', 'long', 'volatile',
            'short', 'signed', 'static', 'string', 'double', 'byte', '', 'array', 'word',
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']',
        '+', '-', '*', '/', '%',
        '=', '<', '>',
        '!', '^', '&', '|',
        '?', ':',
        ';', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF; font-weight: bold;',
            2 => 'color: #FF7373; font-weight: bold;',
            3 => 'color: #B32D00; font-weight: bold;',
            4 => 'color: #0069D2; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #21B661; font-style: italic;',
            2 => 'color: #21B661; font-style: italic;',
            'MULTI' => 'color: #21B661; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #6F2444; font-weight: bold;',
            1 => 'color: #6F2444; font-weight: bold;',
            2 => 'color: #6F2444; font-weight: bold;',
            3 => 'color: #6F2444; font-weight: bold;',
            4 => 'color: #6F2444; font-weight: bold;',
            5 => 'color: #6F2444; font-weight: bold;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #A0184B;font-weight: bold;'
           ),
        'STRINGS' => array(
            0 => 'color: #0036D9;font-weight: bold;'
            ),
        'NUMBERS' => array(
            0 => 'color: #FF7373;font-weight: bold;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #FF7373;font-weight: bold;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #FF7373;font-weight: bold;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #FF7373;font-weight: bold;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#FF7373;font-weight: bold;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#FF7373;font-weight: bold;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#FF7373;font-weight: bold;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#FF7373;font-weight: bold;'
            ),
        'METHODS' => array(
            1 => 'color: #FF8000;',
            2 => 'color: #FF8000;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #A0184B;font-weight: bold;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => 'geshi/redirect.php?language=arduino&search={FNAME}',
        2 => 'geshi/redirect.php?language=arduino&search={FNAME}',
        3 => 'geshi/redirect.php?language=arduino&search={FNAME}',
        4 => 'geshi/redirect.php?language=arduino&search={FNAME}',
        ),
    'REDIRECT' => array(
			'if'=>'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.if',
			'return'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.return',
			'while'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Dowhile',
			'case'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Switchcase',
			'continue'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.continue',
			'default'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Switchcase',
			'do'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Dowhile',
			'else'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.IfElse',
			'for'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.for',
			'switch'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Switchcase',
			'goto'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.goto',
			'null'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Reference',
			'false'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.ConstantesPredefinies',
			'break'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.break',
			'true'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.ConstantesPredefinies',
			'function'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Reference',
			'enum'=> 'http://playground.arduino.cc/Code/Enum',
			'extern'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Reference',
			'inline'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Reference',
			'HIGH'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.ConstantesPredefinies',
			'LOW'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.ConstantesPredefinies',
			'INPUT'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.ConstantesPredefinies',
			'OUTPUT'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.ConstantesPredefinies',
			'pinMode'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.pinMode',
			'digitalWrite'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.digitalWrite',
			'digitalRead'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.digitalRead',
			'analogRead'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.analogRead',
			'analogWrite'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.analogWrite',
			'shiftOut'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.shiftOut',
			'pulseIn'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.pulseIn',
			'millis'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.millis',
			'micros'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.micros',
			'delay'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.delay',
			'delayMicroseconds'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.delayMicroseconds',
			'min'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.min',
			'max'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.max',
			'abs'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.abs',
			'constrain'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.constrain',
			'map'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.map',
			'pow'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.pow',
			'sq'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.sq',
			'sqrt'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.sqrt',
			'sin'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.sin',
			'cos'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.cos',
			'tan'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.tan',
			'randomSeed'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.randomSeed',
			'random'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.random',
			'Serial'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Serial',
			'sizeof'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.sizeof',
			'lowByte'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.lowByte',
			'highByte'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.highByte',
			'bitRead'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.bitRead',
			'bitWrite'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.bitWrite',
			'bitSet'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.bitSet',
			'bitClear'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.bitClear',
			'bit'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.bit',
			'attachInterrupt'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.attachInterrupt',
			'detachInterrupt'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.detachInterrupt',
			'interrupts'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.interrupts',
			'noInterrupts'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.noInterrupts',
			'Serial'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Serial',
			'Stream'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Stream',
			'sizeof'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.sizeof',
			'Mouse'=> 'http://arduino.cc/en/Reference/MouseKeyboard',
			'Keyboard'=> 'http://arduino.cc/en/Reference/MouseKeyboard',
			'void'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.void',
			'boolean'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.boolean',
			'char'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.char',
			'const'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.const',
			'unsigned'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.UnsignedInt',
			'float'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.float',
			'int'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.int',
			'long'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.long',
			'volatile'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.volatile',
			'short'=> 'http://arduino.cc/en/Reference/Short',
			'signed'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.int',
			'static'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.static',
			'string'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.ChainesCaracteres',
			'double'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.double',
			'byte'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.byte',
			'array'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.Tableaux',
			'word'=> 'http://www.mon-club-elec.fr/pmwiki_reference_arduino/pmwiki.php?n=Main.word'
    	),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);
?>
