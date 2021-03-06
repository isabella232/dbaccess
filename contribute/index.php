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
 *               Juergen Kissner
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Gemini DBAccess - Contribute";
	$pageKeywords	= "Eclipse, EclipseRT, Gemini, OSGi, DBAccess, Contribute, Developers, help";
	$pageAuthor		= "Juergen G. Kissner";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Contributing to DBAccess</h2>
		<p>
			If you have a JDBC driver that you would like to either use or have already implemented as a module then
			please either subscribe to and send an email to the <a href="https://dev.eclipse.org/mailman/listinfo/gemini-dev">developer mailing list</a> or post to the <a href="http://www.eclipse.org/forums/index.php?t=thread&frm_id=153">forum</a>.
		    For further information, please refer to the  <a href="http://wiki.eclipse.org/Gemini/DBAccess/CommitterGuide">committer guide</a> of the DBAccess wiki.
		</p>
		
		<p>
			All of the source code for this project is maintained in an git repository. The location of the repository and further information about the project can be found in 
			the <a href="http://eclipse.org/projects/project_summary.php?projectid=rt.gemini.dbaccess">project summary</a>.
		</p>

	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>