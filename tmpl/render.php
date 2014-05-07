<?php
/**
 * @package   element_leaguetable
 * @author    Ray Lawlor - zoomodsplus.com
 * @copyright Copyright (C) Ray Lawlor - zoomodsplus.com
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
// no direct access
defined('_JEXEC') or die;
$this->app->document->addStylesheet('elements:leaguetable/assets/css/style.css');
?>
<table class="uk-table uk-table-striped uk-table-condensed uk-table-hover">
    <thead>
    <th>Pos</th>
    <th>Team</th>
    <th>Played</th>
    <th>Won</th>
    <th>Draw</th>
    <th>Loss</th>
    <th>For</th>
    <th>Against</th>
    <th>GD</th>
    <th>Points</th>
</thead>
<tbody>

    <?php
    $i = 1;
    foreach ($this as $key => $value)
    {
        echo "<tr>";
        echo "<td>" . $i . "</td>";
        echo "<td>" . $value['team'] . "</td>";
        echo "<td>" . $value['played'] . "</td>";
        echo "<td>" . $value['win'] . "</td>";
        echo "<td>" . $value['draw'] . "</td>";
        echo "<td>" . $value['loss'] . "</td>";
        echo "<td>" . $value['for'] . "</td>";
        echo "<td>" . $value['against'] . "</td>";
        echo "<td>" . $value['gd'] . "</td>";
        echo "<td>" . $value['points'] . "</td>";
        echo "</tr>";
        $i++;
    }
    ?>
</tbody>
</table>
