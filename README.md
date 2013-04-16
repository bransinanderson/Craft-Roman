Roman
===========

A simple roman numeral plugin for [Craft CMS](http://buildwithcraft.com).
Convert an integer into a roman numeral and vice versa.

Installation
------------
1. Unzip file 
2. Place "roman" directory into your craft/plugins directory
3. Install plugin in Craft under Settings > Plugins

Examples
------------

Get roman numeral of current year
  {{ craft.roman.getRoman(now.year) }}

Get roman numeral of number 10
  {{ craft.roman.getRoman(10) }}

Get number from roman numeral
  {{ craft.roman.getNumber('MMXIII') }}
