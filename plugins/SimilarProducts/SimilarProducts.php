<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\SimilarProducts;
use Piwik\Plugins\SimilarProducts\Widgets\GetRank;
use Piwik\SettingsPiwik;
use Piwik\Widget\WidgetsList;

/**
 */
class SimilarProducts extends \Piwik\Plugin
{
    public function registerEvents()
    {
        return [
            'Widget.filterWidgets' => 'filterWidgets',
            'AssetManager.getJavaScriptFiles' => 'getJsFiles',
        ];
    }

    public function getJsFiles(&$jsFiles)
    {
        $jsFiles[] = "plugins/SimilarProducts/javascripts/similar.js";
    }

    /**
     * @param WidgetsList $list
     */
    public function filterWidgets($list)
    {
        if (!SettingsPiwik::isInternetEnabled()) {
            $list->remove(GetRank::getCategory(), GetRank::getName());
        }
    }
}
