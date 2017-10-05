<?php
	//This class creates SyntaxHighlighted HtmlString to display PHP Code.
	class SyntaxHighlighter {
		
		/**
		* This function uses the highlight_string method to display php code in proper html and css.
		* @param text This is the text that need to be highlighted.
		* @return Returns the Html and Css encoded string.
		**/
		public function getHighlightedHtlmString( $text ) {
			return highlight_string( $text );
		}
	}
?>