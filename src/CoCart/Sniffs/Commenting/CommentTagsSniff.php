<?php
/**
 * Sniff to prohibit some file comment tags on CoCart
 */

namespace CoCart\Sniffs\Commenting;

use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Files\File;

/**
 * Comment tags sniff.
 */
class CommentTagsSniff implements Sniff {

	/**
	 * A list of tokenizers this sniff supports.
	 *
	 * @access public
	 * @var    array
	 */
	public $supportedTokenizers = array(
		'PHP',
		'JS',
	);

	/**
	 * Returns an array of tokens this test wants to listen for.
	 *
	 * @access public
	 * @return array
	 */
	public function register(): array {
		return [T_DOC_COMMENT_TAG];
	}

	/**
	 * List of prohibited tags.
	 *
	 * @access protected
	 * @return array
	 */
	protected function getProhibitedTags(): array {
		return [
			'@category'  => 'CategoryTag',
			'@copyright' => 'CopyrightTag',
		];
	} // END getProhibitedTags()

	/**
	 * Get error message.
	 *
	 * @access protected
	 * @param  string $key
	 * @return string
	 */
	protected function getErrorMessage(string $key): string {
		if ($key === '@category') {
			return "@category is deprecated, use @package instead";
		}

		return "{$key} tags are prohibited";
	} // END getErrorMessage()

	/**
	 * Processes this test, when one of its tokens is encountered.
	 *
	 * @access public
	 * @param \PHP_CodeSniffer\Files\File $phpcsFile The file being scanned.
	 * @param int                         $stackPtr  The position of the current token
	 *                                               in the stack passed in $tokens.
	 */
	public function process(File $phpcsFile, $stackPtr) {
		$tokens = $phpcsFile->getTokens();

		foreach ($this->getProhibitedTags() as $key => $value) {
			if ($key === $tokens[$stackPtr]['content']) {
				$phpcsFile->addError($this->getErrorMessage($key), $stackPtr, $value);
			}
		}
	} // END process()

}
