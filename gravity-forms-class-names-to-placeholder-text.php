<?php
/**
 * Plugin Name: Gravity Forms Class Names to Placeholder Text
 * Plugin URI: https://github.com/ajschlosser/gravity-forms-class-names-to-placeholder-text
 * Description: Adds placeholder text to Gravity Forms elements.
 * Version: 0.0.12
 * Author: Aaron John Schlosser
 * Author URI: http://www.aaronschlosser.com
 * License: GPL2
 */
/*
	Gravity Forms Class Names to Placeholder Text adds placeholder text to Gravity Forms elements.
	Copyright (C) 2014 Aaron John Schlosser (email: aaron@aaronschlosser.com)

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined('ABSPATH') or die("No script kiddies please!");

function addPlaceholders() {
	?>
<script>
var gformNamesToPlaceHolders=function(){function getGformName(s){if(s.indexOf("gfield_error")==-1){s=s.slice(10,s.lastIndexOf(" "));return s.slice(0,s.indexOf(" "));} else return s.slice(21,s.lastIndexOf(" "));} var a=document.getElementsByClassName("ginput_container");for(var i=0;i<a.length;i++)a[i].firstChild.setAttribute("placeholder",getGformName(a[i].parentNode.getAttribute("class")));} gformNamesToPlaceHolders();
</script>
<?php
}

add_action( 'wp_footer', 'addPlaceholders' );