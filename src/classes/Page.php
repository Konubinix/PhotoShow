<?php
/**
 * This file implements the class Page.
 * 
 * PHP versions 4 and 5
 *
 * LICENSE:
 * 
 * This file is part of PhotoShow.
 *
 * PhotoShow is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PhotoShow is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PhotoShow.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Website
 * @package   Photoshow
 * @author    Thibaud Rohmer <thibaud.rohmer@gmail.com>
 * @copyright 2011 Thibaud Rohmer
 * @license   http://www.gnu.org/licenses/
 * @link      http://github.com/thibaud-rohmer/PhotoShow-v2
 */

/**
 * Page
 *
 * The page holds all of the data. This class build the entire
 * structure of the website, as it is viewed by the user.
 *
 * @category  Website
 * @package   Photoshow
 * @author    Thibaud Rohmer <thibaud.rohmer@gmail.com>
 * @copyright Thibaud Rohmer
 * @license   http://www.gnu.org/licenses/
 * @link      http://github.com/thibaud-rohmer/PhotoShow-v2
 */

abstract class Page implements HTMLObject
{
		/**
		 * Generate an insanely beautiful header.
		 * TODO: Title
		 *
		 * @return void
		 * @author Thibaud Rohmer
		 */
		public function header(){
			echo "<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01//EN' 'http://www.w3.org/TR/html4/strict.dtd'>\n";
			echo "<head>\n";
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>\n";
			echo "<title>PhotoShow</title>\n";
			echo "<meta name='author' content='Thibaud Rohmer'>\n";
			echo "<link rel='stylesheet' href='src/stylesheets/main.css' type='text/css' media='screen' charset='utf-8'>\n";
			echo "<link rel='stylesheet' href='src/stylesheets/page.css' type='text/css' media='screen' charset='utf-8'>\n";
			echo "<link rel='stylesheet' href='src/stylesheets/panels.css' type='text/css' media='screen' charset='utf-8'>\n";
			echo "<link rel='stylesheet' href='src/stylesheets/forms.css' type='text/css' media='screen' charset='utf-8'>\n";
			echo "</head>";
		}
}
?>