<?php
# CMS - CMS Made Simple - PORTFOLIO module
#
# Written by Alexander Bierbrauer, abierbrauer@polyvision.org
# (c) 2010 by Alexander Bierbrauer, polyvision
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#
if( !isset($gCms) ) exit;

define('CMS_PORTFOLIO_VERSION','1.0 RC1');

class Portfolio extends CMSModule
{
	function GetName()
	{
		return 'Portfolio';
	}

	function GetFriendlyName()
	{
		return $this->Lang('portfolio');
	}

	function IsPluginModule()
	{
		return true;
	}

	function HasAdmin()
	{
		return true;
	}

	function GetVersion()
	{
		return CMS_PORTFOLIO_VERSION;
	}

	function MinimumCMSVersion()
	{
		return '1.8-beta1';
	}

	function GetAdminDescription()
	{
		return $this->Lang('description');
	}

	function GetAdminSection()
	{
		return 'content';
	}

    function VisibleToAdminUser()
    {
		return true;
    }
}

# vim:ts=4 sw=4 noet
?>
