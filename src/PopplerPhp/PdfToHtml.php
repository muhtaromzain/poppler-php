<?php
/**
 * Poppler-PHP
 *
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    10/13/2016
 * Time:    12:59 AM
 **/

namespace MuhtaromZain\PopplerPhp;

use MuhtaromZain\PopplerPhp\Constants as C;
use MuhtaromZain\PopplerPhp\PopplerOptions\ConsoleFlags;
use MuhtaromZain\PopplerPhp\PopplerOptions\CredentialOptions;
use MuhtaromZain\PopplerPhp\PopplerOptions\EncodingOptions;
use MuhtaromZain\PopplerPhp\PopplerOptions\HtmlOptions;
use MuhtaromZain\PopplerPhp\PopplerOptions\PageRangeOptions;

/**
 * Class PdfToHtml
 * @package MuhtaromZain\PopplerPhp
 */
class PdfToHtml extends PopplerUtil
{
    use PageRangeOptions;
    use ConsoleFlags;
    use HtmlOptions;
    use EncodingOptions;
    use CredentialOptions;

    /**
     * @var
     */
    private $products;

    /**
     * PdfToHtml constructor.
     * @param string $pdfFile
     * @param array $options
     * @throws Exceptions\PopplerPhpException
     */
    public function __construct($pdfFile = '', array $options = [])
    {
        $this->binFile = C::PDF_TO_HTML;
        $this->setFlag(C::_Q);

        return parent::__construct($pdfFile, $options);
    }

    /**
     * @return array|mixed
     */
    public function utilOptions()
    {
        return array_merge(
            $this->pageRangeOptions(),
            $this->htmlOptions(),
            $this->credentialOptions(),
            $this->encodingOptions()
        );
    }

    /**
     * @return array|mixed
     */
    public function utilFlags()
    {
        return array_merge(
            $this->allConsoleFlags(),
            $this->htmlFlags()
        );
    }

    /**
     * @return array|mixed
     */
    public function utilOptionRules()
    {
        return [
            'alt' => [],
        ];
    }

    /**
     * @return array|mixed
     */
    public function utilFlagRules()
    {
        return [
            'alt' => [],
        ];
    }

    /**
     * @return $this
     */
    public function defaultEncoding()
    {
        return $this;
    }

    /**
     * @return $this
     */
    public function listEncodings()
    {
        return $this;
    }

    /**
     * @return $this
     */
    public function oddPagesOnly()
    {
        return $this;
    }

    /**
     * @return $this
     */
    public function evenPagesOnly()
    {
        return $this;
    }

    /**
     * @return $this
     */
    public function firstPageOnly()
    {
        return $this;
    }

    /**
     * @param bool $regenerate
     * @return string
     */
    public function generate($regenerate = false)
    {
        if (is_null($this->products) or $regenerate == true) {
            $content = $this->shellExec();

            $this->products = $content;
        }

        return $this->products;
    }

    /**
     * @return mixed|string
     */
    public function outputExtension()
    {
        return '.html';
    }
}
