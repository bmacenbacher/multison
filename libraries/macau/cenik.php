<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

require_once __DIR__ . '/../PhpSpreadsheet/src/Bootstrap.php';

/**
 * PriceList of Multison company
 *
 * @author Adam Macenbacher
 */
class PriceList
{
	
	/** @var PhpOffice\PhpSpreadsheet\IOFactory */
	private $spreadsheet;

	/** @var [] */
	public $sheetData;

	/** @var string */
	static $inputFileName = '/../../xls/cenik2017.xls';

	/** @var string */
	static $imagePath = 'images/cenik';

	/** @var [] */
	public $columnNames;

	/** @var [] */
	public $rows;


	/**
	 * @var IOFactory
	 *
	 * @return void
	 */
	public function __construct(IOFactory $spreadsheet = NULL)
	{
		$this->spreadsheet = !is_null($spreadsheet) ?  $spreadsheet : IOFactory::load(__DIR__ . self::$inputFileName);
		$this->sheetData = $this->spreadsheet->getActiveSheet()->toArray(NULL, TRUE, TRUE, TRUE);
		$this->processXls();
	}


	/**
	 * @return void
	 */
	public function processXls()
	{
		$firstRow = TRUE;

		foreach( $this->sheetData as $key => $value ) {
			if( $firstRow ){
				$this->columnNames = $value;
				$firstRow = FALSE;
			} else {
				$this->rows[] = $value;
			}
		}

		//var_dump($this->rows);
	}

	/**
	 * @return string
	 */
	static public function getPathInfo()
	{
		return pathinfo(self::$inputFileName, PATHINFO_BASENAME);
	}

}

?>
