<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\SimilarProducts;

use Piwik\DataTable;
use Piwik\DataTable\Row;
use Piwik\Db;

/**
 * API for plugin SimilarProducts
 *
 * @method static \Piwik\Plugins\SimilarProducts\API getInstance()
 */
class API extends \Piwik\Plugin\API
{
    /**
     * Example method. Please remove if you do not need this API method.
     * You can call this API method like this:
     * /index.php?module=API&method=SimilarProducts.getAnswerToLife
     * /index.php?module=API&method=SimilarProducts.getAnswerToLife&truth=0
     *
     * @param  bool $truth
     *
     * @return int
     */
  public function getAnswerToLife($truth = true)
  {

    $sql = "select * from matomo_log_conversion_item limit 1";
    $res =  Db::fetchAll($sql);
    return $res;
  }

  /**
   * Another example method that returns a data table.
   * @param int    $idSite
   * @param string $period
   * @param string $date
   * @param bool|string $segment
   * @return DataTable
   */
  public function getExampleReport($idSite, $period, $date, $segment = false)
  {
    $table = DataTable::makeFromSimpleArray(array(
      array('label' => 'My Label 1', 'nb_visits' => '1'),
      array('label' => 'My Label 2', 'nb_visits' => '5'),
    ));

    return $table;
  }
}
