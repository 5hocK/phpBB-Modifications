<?php
/***************************************************************************
 *          lang_anti_spam_acp.php
 * 			 -------------------
 *   copyright	: (C) 2006 EXreaction
 *   email		: exreaction@lithiumstudios.org
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

// Common
	$lang['Spam_Attempt']								= 'Tentative de pollution sur ';
	$lang['Not_Test_Email_Header']						= 'Un utilisateur a effectu� une op�ration non consentie (au moment de %s) sur';

// Admin Control Panel
	// Common
		$lang['Anti_Spam_ACP']							= 'Anti-Spam ACP, contr�le de la pollution';
		$lang['Anti_Spam_ACP_Created_By']				= 'Cr�� par: <a href="http://www.lithiumstudios.org" style="text-decoration:none" target="_blank">EXreaction</a>';
		$lang['version_check_disabled']					= 'Vous n\'avez pas activ� l\'option �Contr�ler les mises � jour�. Nous vous conseillons de le faire.';
		$lang['AS_ACP_up_to_date']						= 'Votre version de Anti-Spam ACP est � jour.';
		$lang['AS_ACP_not_up_to_date']					= 'Vous n\'utilisez pas la derni�re version de Anti-Spam ACP.  Vous pouvez t�l�charger la derni�re version stable de Anti-Spam ACP depuis <a href="http://www.lithiumstudios.org/phpBB3/viewtopic.php?f=25&t=4">Lithium Studios</a>.';
		$lang['AS_ACP_Latest_Version']					= 'La derni�re version stable est la %s.';
		$lang['AS_ACP_Current_Version']					= 'Vous utilisez la version %s.';

		$lang['Click_return_AS_ACP']					= 'Cliquer %sici%s pour revenir � Configuration Anti-Spam';
		$lang['AS_ACP_Update_Error']					= 'Des erreurs ont �t� d�tect�es, le reste du ';
		$lang['Failed_Update']							= 'Mise � jour de la configuration g�n�rale de %s a �chou�';

		$lang['User_id']								= 'Identification de l\'utilisateur';
		$lang['Always_Off']								= 'Toujours d�sactiv�';
		$lang['Always_On']								= 'Toujours activ�';
		$lang['By_Post_Count']							= 'D�sactiv� pour les premiers';
		$lang['Post_Count']								= 'messages';

		$lang['Constants_Update']						= 'Le fichier includes/constants.php n\'a pas �t� mis � jour correctement. Effectuez manuellement les modifications requises par cette extension.';

	// General Options
		$lang['General_Settings']						= 'Param�tres g�n�raux';
		$lang['Check_Version']							= 'Contr�ler les mises � jour:';
		$lang['Check_Version_Explain']					= 'Acc�de automatiquement � lithiumstudios.org et contr�le si vous utilisez la derni�re version de Anti-Spam ACP (exactement comme phpBB).';
		$lang['Acct_Activation_Explain']				= 'S�lectionner �Utilisateur� pour obtenir les meilleurs r�sultats et la meilleure protection.';
		$lang['Hide_Inactive_Users']					= 'Cacher les utilisateurs inactifs:';
		$lang['Hide_Inactive_Users_Explain']			= 'Cache les utilisateurs inactifs des statistiques du forum et de la Liste des utilisateurs.';

		$lang['Captcha_Settings']						= 'Param�tres de la confirmation visuelle';
		$lang['Captcha_Version']						= 'Choisir la version que vous voulez utiliser:';
		$lang['Captcha_Version_Explain']				= 'S\'assurer que les param�tres ci-dessus soient ceux que vous d�sirez. Si la version choisie est incompatible avec les param�tres de votre serveur, c\'est la version par d�faut de phpBB2 qui sera utilis�e.';
		$lang['Demo']									= 'Pr�visualisation';
		$lang['Demo_Noise']								= 'Pr�visualisation avec bruit';

		$lang['Random_Captcha']							= 'Choisir chaque fois une version diff�rente, au hasard';
		$lang['Default_Captcha']						= 'Utiliser la confirmation visuelle par d�faut de phpBB2<br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;%s';
		$lang['Better_Captcha']							= 'Utiliser une version modifi�e de <a href="http://www.phpbb.com/phpBB/viewtopic.php?t=473222">Better Captcha</a><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;%s';
		
		$lang['Captcha_Noise']							= 'Ajouter le bruit � la confirmation visuelle (si possible):';
		$lang['Captcha_Noise_Explain']					= 'Rend plus difficile la lecture du code aux robots et aux humains.<br />N.B. Cette option n\'est pas disponible pour toutes les versions.';
		$lang['Captcha_Case_Sensitive']					= 'Code de confirmation visuelle sensible � la casse:';
		$lang['Captcha_Case_Sensitive_Explain']			= 'S\'il est activ�, une s�quence du type \'asdfghkj\' ne sera pas consid�r�e �quivalente � \'ASDFGHKJ\', autrement oui.';

		$lang['Posting_Settings']						= 'Param�tres d\'envoi';
		$lang['Posting_Url']							= 'URL/liens dans les messages';
		$lang['Posting_Url_Explain']					= 'D�termine quand les URL/liens dans le corps d\'un message sont consentis.<br /> Ils sont toujours consentis pour les administrateurs et les mod�rateurs.';
		$lang['Url_Off']								= 'Toujours d�sactiv�s';
		$lang['Url_On']									= 'Toujours activ�s';
		$lang['Url_By_Post_Count']						= 'D�sactiv�s pour les premiers';
		$lang['Posting_Url_Guest']						= 'Toujours d�sactiv�s pour les invit�s';

		$lang['Spam_Log']								= 'Registre de la pollution';
		$lang['Log_Settings']							= 'Param�tres du registre et du courrier �lectronique';
		$lang['Log_Captcha']							= 'Enregistrer la confirmation visuelle';
		$lang['Log_Captcha_Explain']					= 'Enregistre les donn�es de chaque utilisateur qui tape un code de confirmation visuelle erron� ou qui n\'en tape aucun.';
		$lang['Log_Profile']							= 'Enregistrer le profil';
		$lang['Log_Profile_Explain']					= 'Enregistre les donn�es de chaque utilisateur qui tente de remplir un champ du profil non consenti ou qui n\'en rempli pas un obligatoire.';
		$lang['Log_Url_Posts']							= 'Enregistrer les URL/liens';
		$lang['Log_Url_Posts_Explain']					= 'Enregistre les donn�es de chaque utilisateur qui tente d\'ins�rer un URL/lien en violant les normes en vigueur sur les URL.';
		$lang['Log_Show']								= 'Nombre de rubriques par page';
		$lang['Log_Show_Explain']						= 'Nombre de rubriques par page de registre.';
		$lang['Logs']									= '';

		$lang['Email_Address']							= 'Adresse de courrier �lectronique';
		$lang['Email_Address_Explain']					= 'Adresse de courrier �lectronique � laquelle seront envoy�es les notifications de tentatives de pollution (et qui sera montr�e si l\'option �Toujours montrer son adresse e-mail� est activ�e).<br />Pour ins�rer plusieurs adresses, les s�parer par une virgule.';
		$lang['Send_Email']								= 'Envoyer le message de notification';
		$lang['Send_Email_Explain']						= 'Envoie un message �lectronique de notification chaque fois qu\'une op�ration non consentie est enregistr�e.';
		$lang['L_Test_Mail']							= 'Envoyer un message d\'essai';
		$lang['L_Test_Mail_Explain']					= 'Envoie un message d\'essai � vous-m�me.';

		$lang['Test_Occupation']						= 'V�rificateur de courrier �lectronique';
		$lang['Test_Interests']							= 'Envoyer des messages �lectroniques';
		$lang['Test_Signature']							= 'Merci d\'avoir test� la fonctionnalit� de courriel d\'Anti-Spam ACP. Visitez http://www.lithiumstudios.org per toute assistance.';
		$lang['Test_Email_Header']						= 'Vous avez envoy� un message d\essai depuis';
		$lang['Test_Username']							= 'Utilisateur d\'essai';
		$lang['Test_Email']								= 'essai@%s';
		$lang['Test_Message_Sent']						= 'Le message d\'essai a �t� envoy�.';

	// Inactive Userlist
		$lang['Inactive_Userlist']						= 'Liste des utilisateurs inactifs';
		$lang['Anti_Spam_ACP_Userlist_Original_By']		= 'Cr��e par: Milkboy31, wGEric';
		$lang['Anti_Spam_ACP_Userlist_Modified_By']		= 'Modifi�e par: <a href="http://www.lithiumstudios.org" style="text-decoration:none">EXreaction</a>';
		$lang['Show']									= 'Montrer';
		$lang['Group']									= 'Groupes';
		$lang['Find_all_posts']							= 'Trouver tous les messages';
		$lang['User_manage']							= 'G�rer';
		$lang['Select_All']								= 'S�lectionner tous';
		$lang['Deselect_All']							= 'D�s�lectionner tous';
		$lang['Select_one']								= 'S�lectionner';
		$lang['Ban']									= 'Bannir';
		$lang['UnBan']									= 'D�bannir';
		$lang['Activate']								= 'Activer';

		$lang['Confirm_user_deleted']					= '�tes-vous s�r de vouloir �liminer les utilisateurs s�lectionn�s?';
		$lang['User_deleted_successfully']				= 'Utilisateurs �limin�s avec succ�s!';
		$lang['Click_return_userlist']					= 'Cliquer %sici%s pour revenir � la Liste des utilisateurs inactifs';
		$lang['Confirm_user_ban']						= '�tes-vous s�r de vouloir bannir les utilisateurs s�lectionn�s?';
		$lang['User_banned_successfully']				= 'Utilisateurs bannis avec succ�s!';
		$lang['Confirm_user_un_ban']					= '�tes-vous s�r de vouloir d�bannir les utilisateurs s�lectionn�s?';
		$lang['User_un_banned_successfully']			= 'Utilisateurs d�bannis avec succ�s!';
		$lang['User_status_updated']					= '�tat des utilisateurs mis � jour avec succ�s!';

		$lang['All']									= 'Tous';
		$lang['Last_activity']							= 'Derni�re activit�';
		$lang['User_level']								= 'Niveau de l\'utilisateur';
		$lang['Rank']									= 'Rang';
		$lang['Ascending']								= 'Croissant';
		$lang['Descending']								= 'D�croissant';
		$lang['Is_Banned']								= 'Banni'; 
		$lang['Never']									= 'Jamais';

	// Profile Options
		$lang['Profile_Options']						= 'Options du profil';
		$lang['Profile_Settings']						= 'Param�tres du profil';
		$lang['Reg_Off']								= 'D�sactiv� pour l\'enregistrement';
		$lang['Required']								= 'Obligatoire';
		$lang['Sync']									= 'Synchroniser et envoyer';
		$lang['Sync_Explain']							= 'Met � jour les donn�es de tous les utilisateurs de telle sorte que les r�gles en vigueur sur le profil soient respect�es.';
		$lang['Config_updated_users_synced']			= 'Synchronisation effectu�e avec succ�s!';
		$lang['AS_ACP_Update_Error_synced']				= 'Les donn�es des utilisateurs ont �t� mises � jour avec succ�s!<br/>Toutefois, des erreurs ont �t� d�tect�es dans la mise � jour de la configuration: le reste de la configuration a �t� mis � jour avec succ�s.';

	// Log
		$lang['Confirm_Log_Clear']						= '�tes-vous s�r de vouloir r�initialiser le registre?';
		$lang['Log_Cleared']							= 'Le registre a r�initialis� avec succ�s!';
		$lang['Clear_Log']								= 'R�initialiser le registre';
		$lang['Log_ID']									= 'Identification du registre';
		$lang['Date']									= 'Date';
		$lang['No_Entries_In_Log']						= 'Le registre est vide.';

	// admin_users.php
		$lang['User_Topics_Deleted']					= 'Les fils de cet utilisateur ont �t� supprim�s!';
		$lang['User_Posts_Deleted']						= 'Les messages de cet utilisateur ont �t� supprim�s!';
		$lang['User_delete_topics']						= 'Supprimer les fils de cet utilisateur?';
		$lang['User_delete_topics_explain']				= 'S�lectionner cette case pour supprimer tous les fils ouverts par cet utilisateur. Cette op�ration ne peut pas �tre annul�e.';
		$lang['User_delete_posts']						= 'Supprimer les messages de cet utilisateur?';
		$lang['User_delete_posts_explain']				= 'S�lectionner cette case pour supprimer tous les messages envoy�s par cet utilisateur. Cette op�ration ne peut pas �tre annul�e.';


// registration check(includes/anti_spam_acp.php and includes/usercp_register.php)
	$lang['Profile_Error']								= 'Vous avez rempli le champ non consenti %s.';
	$lang['Profile_Error_Email']						= 'L\'utilisateur a rempli le champ non consenti %s avec � %s �.';
	$lang['Profile_Error_Email_Required']				= 'L\'utilisateur n\'a pas rempli le champ obligatoire %s.';
	$lang['Registering']								= 's\'enregistrer';
	$lang['Editing_Profile']							= 'modifier son profil';
	$lang['During_Registration']						= 'Enregistrement';
	$lang['No_Captcha_Code']							= 'L\'utilisateur n\'a pas ins�r� le code de confirmation visuelle. Le code de l\'image �tait : � %s �.';
	$lang['Wrong_Captcha_Code']							= 'L\'utilisateur a ins�r� un code de confirmation visuelle erron�.  Le code de l\'image �tait : � %s �. Le code ins�r� a �t� : � %s �.';
	$lang['New_Confirm_Code_Explain']					= 'Taper le code exactement comme il appara�t dans l\'image (il n\'y a pas d\'espaces). Le syst�me distingue les majuscules et les minuscules, mais les lettres sont toutes des majuscules. Il n\'y a pas de 0 (z�ros).';

// posting check(includes/functions_post.php)
	$lang['Url_Not_Allowed']							= 'Les URL/liens ne sont pas consentis.';
	$lang['Url_Not_Allowed_Guests']						= 'Les URL/liens ne sont pas consentis aux invit�s.';
	$lang['Url_Not_Allowed_Count']						= 'Vous devez avoir envoy� %s messages avant de pouvoir ins�rer des URL/liens.';
	$lang['During_Posting']								= 'Envoi d\'un message';
	$lang['Posting']									= 'envoyer un message';
?>