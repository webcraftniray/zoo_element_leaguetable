<?php

/**
 * @package   element_leaguetable
 * @author    Ray Lawlor - zoomodsplus.com
 * @copyright Copyright (C) Ray Lawlor - zoomodsplus.com
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
// no direct access
defined('_JEXEC') or die('Restricted access');

// register ElementRepeatable class
App::getInstance('zoo')->loader->register('ElementRepeatable', 'elements:repeatable/repeatable.php');

/*
  Class: ElementText
  The text element class
 */

class Elementleaguetable extends ElementRepeatable implements iRepeatSubmittable
{
    /*
      Function: _hasValue
      Checks if the repeatables element's value is set.

      Parameters:
      $params - render parameter

      Returns:
      Boolean - true, on success
     */

    protected function _hasValue($params = array())
    {
        return true;
    }

    /*
      Function: _getSearchData
      Get repeatable elements search data.

      Returns:
      String - Search data
     */

    protected function _getSearchData()
    {
        return $this->get('team');
    }

    /*
      Function: _edit
      Renders the repeatable edit form field.

      Returns:
      String - html
     */

    protected function _edit()
    {
        $html = array();
        $html[] = $this->app->html->_('control.text', $this->getControlName('team'), $this->get('team'), 'size="30" maxlength="255" placeholder="Teamname" class="calendar-element"');
        $html[] = $this->app->html->_('control.text', $this->getControlName('played'), $this->get('played'), 'size="5" maxlength="3" placeholder="Played" class="leaguepos-element"');
        $html[] = $this->app->html->_('control.text', $this->getControlName('win'), $this->get('win'), 'size="5" maxlength="3" placeholder="Wins" class="leaguepos-element"');
        $html[] = $this->app->html->_('control.text', $this->getControlName('draw'), $this->get('draw'), 'size="5" maxlength="3" placeholder="Draws" class="leaguepos-element"');
        $html[] = $this->app->html->_('control.text', $this->getControlName('loss'), $this->get('loss'), 'size="5" maxlength="3" placeholder="Losses" class="leaguepos-element"');
        $html[] = $this->app->html->_('control.text', $this->getControlName('for'), $this->get('for'), 'size="5" maxlength="3" placeholder="For" class="leaguepos-element"');
        $html[] = $this->app->html->_('control.text', $this->getControlName('against'), $this->get('against'), 'size="5" maxlength="3" placeholder="Against" class="leaguepos-element"');
        $html[] = $this->app->html->_('control.text', $this->getControlName('gd'), $this->get('gd'), 'size="5" maxlength="3" placeholder="Goal Difference" class="leaguepos-element"');
        $html[] = $this->app->html->_('control.text', $this->getControlName('points'), $this->get('points'), 'size="5" maxlength="3" placeholder="Points" class="leaguepos-element"');

        return implode("\n", $html);
    }

    /*
      Function: _renderSubmission
      Renders the element in submission.

      Parameters:
      $params - AppData submission parameters

      Returns:
      String - html
     */

    public function _renderSubmission($params = array())
    {
        return $this->_edit();
    }

    protected function _render($params = array())
    {
        $params = $this->app->data->create($params);

        if ($layout = $this->getLayout('render.php', compact('params')))
        {

            return $this->renderLayout($layout, array(
                        'team' => $this->get('team'),
                        'played' => $this->get('played'),
                        'win' => $this->get('win'),
                        'draw' => $this->get('draw'),
                        'loss' => $this->get('loss'),
                        'for' => $this->get('for'),
                        'against' => $this->get('against'),
                        'gd' => $this->get('gd'),
                        'points' => $this->get('points'),
                            )
            );
        }
    }

}
