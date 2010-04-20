<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Christopher Frost
 *               Mike Keith
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini DB Access - Documentation";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, Documentation";
	$pageAuthor		= "Mike Keith";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Gemini DB Access Documentation</h2>
		<p>
		The documentation has not been created yet for this project. If you would like to volunteer to write, or assist in 
		writing them, please send an email to the <a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">developer mailing list</a> or post to the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">forum</a>.
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>