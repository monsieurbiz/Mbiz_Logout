<?php
/**
 * This file is part of Mbiz_Logout for Magento.
 *
 * @license All rights reserved.
 * @author Léo Peltier <l.peltier@monsieurbiz.com>
 * @category Mbiz
 * @package Mbiz_Logout
 * @copyright Copyright (c) 2013 Monsieur Biz (http://monsieurbiz.com/)
 */

class Mbiz_Logout_Model_Observer
{
    /**
     * Observe the logout event to redirect to the index instead of
     * logoutSuccess.
     *
     * @see controller_action_postdispatch_customer_account_logout
     */
    public function removeRedirection($obs)
    {
        $obs->getControllerAction()->setRedirectWithCookieCheck('/');
    }
}
