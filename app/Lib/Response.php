<?php
//default responses
const DEFAULT_200 = [
    'response_code' => 'default_200',
    'message' => 'Chargement réussi'
];

const DEFAULT_SENT_OTP_200 = [
    'response_code' => 'default_200',
    'message' => 'OTP envoyé avec succès'
];

const DEFAULT_VERIFIED_200 = [
    'response_code' => 'default_verified_200',
    'message' => 'Vérifié avec succès'
];

const DEFAULT_EXPIRED_200 = [
    'response_code' => 'default_expired_200',
    'message' => 'Ressource expirée'
];

const COUPON_404 = [
    'response_code' => 'coupon_404',
    'message' => 'Coupon non trouvé ou non applicable'
];

const DEFAULT_PASSWORD_RESET_200 = [
    'response_code' => 'default_password_reset_200',
    'message' => 'Réinitialisation du mot de passe réussie'
];

const DEFAULT_PASSWORD_CHANGE_200 = [
    'response_code' => 'default_password_change_200',
    'message' => 'Changement de mot de passe réussi'
];

const DEFAULT_PASSWORD_MISMATCH_403 = [
    'response_code' => 'default_password_mismatch_403',
    'message' => 'Le mot de passe fourni ne correspond pas au mot de passe précédent'
];

const NO_CHANGES_FOUND = [
    'response_code' => 'no_changes_found_200',
    'message' => 'Aucun changement trouvé'
];

const DEFAULT_204 = [
    'response_code' => 'default_204',
    'message' => 'Information non trouvée'
];

const NO_DATA_200 = [
    'response_code' => 'no_data_found_200',
    'message' => 'Aucune donnée trouvée'
];

const DEFAULT_400 = [
    'response_code' => 'default_400',
    'message' => 'Informations invalides ou manquantes'
];

const DEFAULT_401 = [
    'response_code' => 'default_401',
    'message' => 'Les identifiants ne correspondent pas'
];

const DEFAULT_EXISTS_203 = [
    'response_code' => 'default_exists_203',
    'message' => 'La ressource existe déjà'
];

const DEFAULT_USER_REMOVED_401 = [
    'response_code' => 'default_user_removed_401',
    'message' => 'L\'utilisateur a été supprimé, veuillez contacter un Administrateur Avec Plus de Droit d\'access'
];

const USER_404 = [
    'response_code' => 'user_404',
    'message' => 'Utilisateur non trouvé'
];

const DEFAULT_USER_UNDER_REVIEW_DISABLED_401 = [
    'response_code' => 'default_user_under_review_or_disabled_401',
    'message' => 'Votre compte est en cours de révision'
];

const DEFAULT_USER_DISABLED_401 = [
    'response_code' => 'default_user_disabled_401',
    'message' => 'L\'utilisateur a été désactivé, veuillez contacter un Administrateur Avec Plus de Droit d\'access'
];

const DEFAULT_403 = [
    'response_code' => 'default_403',
    'message' => 'Votre accès a été refusé'
];

const DEFAULT_NOT_ACTIVE = [
    'response_code' => 'default_not_active_200',
    'message' => 'Les données récupérées ne sont pas actives'
];

const DEFAULT_404 = [
    'response_code' => 'default_404',
    'message' => 'Ressource non trouvée'
];

const TRIP_REQUEST_PAUSED_404 = [
    'response_code' => 'trip_request_paused_404',
    'message' => 'Le trajet est en pause, le statut ne peut pas être mis à jour'
];

const OFFLINE_403 = [
    'response_code' => 'offline_403',
    'message' => 'Impossible de passer hors ligne pendant le trajet en cours',
];

const AMOUNT_400 = [
    'response_code' => 'amount_400',
    'message' => 'Le montant demandé est supérieur au montant disponible'
];

const DEFAULT_DELETE_200 = [
    'response_code' => 'default_delete_200',
    'message' => 'Informations supprimées avec succès'
];

const DEFAULT_FAIL_200 = [
    'response_code' => 'default_fail_200',
    'message' => 'Action échouée'
];

const DEFAULT_PAID_200 = [
    'response_code' => 'default_paid_200',
    'message' => 'Déjà payé'
];

const DEFAULT_LAT_LNG_400 = [
    'response_code' => 'default_lat_lng_400',
    'message' => 'Les points de départ ou de destination sont incorrects !'
];

const DEFAULT_STORE_200 = [
    'response_code' => 'default_store_200',
    'message' => 'Ajouté avec succès'
];

const DEFAULT_UPDATE_200 = [
    'response_code' => 'default_update_200',
    'message' => 'Mise à jour réussie'
];

const DEFAULT_RESTORE_200 = [
    'response_code' => 'default_restore_200',
    'message' => 'Restauré avec succès'
];

const DEFAULT_STATUS_UPDATE_200 = [
    'response_code' => 'default_status_update_200',
    'message' => 'Statut mis à jour avec succès'
];

const TOO_MANY_ATTEMPT_403 = [
    'response_code' => 'too_many_attempt_403',
    'message' => 'Votre limite d\'appels API a été dépassée, réessayez dans une minute.'
];

const REGISTRATION_200 = [
    'response_code' => 'registration_200',
    'message' => 'Enregistré avec succès'
];

//auth module
const AUTH_LOGIN_200 = [
    'response_code' => 'auth_login_200',
    'message' => 'Connecté avec succès'
];

const AUTH_LOGOUT_200 = [
    'response_code' => 'auth_logout_200',
    'message' => 'Déconnecté avec succès'
];

const ACCOUNT_DELETED_200 = [
    'response_code' => 'account_deleted_200',
    'message' => 'Votre compte a été supprimé avec succès'
];

const AUTH_LOGIN_401 = [
    'response_code' => 'auth_login_401',
    'message' => 'Les identifiants de l\'utilisateur ne correspondent pas'
];

const AUTH_LOGIN_404 = [
    'response_code' => 'auth_login_404',
    'message' => 'Quelque chose s\'est mal passé ou le compte n\'a pas pu être trouvé'
];

const ACCOUNT_DISABLED = [
    'response_code' => 'account_disabled_401',
    'message' => 'Le compte utilisateur a été désactivé, veuillez parler à l\'administrateur.'
];

const AUTH_LOGIN_403 = [
    'response_code' => 'auth_login_403',
    'message' => 'Identifiants de connexion incorrects'
];

const ACCESS_DENIED = [
    'response_code' => 'access_denied_403',
    'message' => 'Accès refusé'
];

//user management module
const USER_ROLE_CREATE_400 = [
    'response_code' => 'user_role_create_400',
    'message' => 'Informations invalides ou manquantes'
];

const USER_ROLE_CREATE_200 = [
    'response_code' => 'user_role_create_200',
    'message' => 'Ajouté avec succès'
];

const USER_ROLE_UPDATE_200 = [
    'response_code' => 'user_role_update_200',
    'message' => 'Mise à jour réussie'
];

const USER_ROLE_UPDATE_400 = [
    'response_code' => 'user_role_update_400',
    'message' => 'Données invalides ou manquantes'
];

const DRIVER_STORE_200 = [
    'response_code' => 'driver_store_200',
    'message' => 'Ajouté avec succès'
];

const DRIVER_UPDATE_200 = [
    'response_code' => 'driver_store_200',
    'message' => 'Mise à jour réussie'
];

const DRIVER_DELETE_200 = [
    'response_code' => 'driver_delete_200',
    'message' => 'Informations supprimées avec succès'
];

const DRIVER_DELETE_403 = [
    'response_code' => 'driver_delete_403',
    'message' => 'Impossible de supprimer maintenant'
];

const DRIVER_BID_NOT_FOUND_403 = [
    'response_code' => 'driver_bid_not_found_403',
    'message' => 'Le conducteur a annulé l\'offre ou l\'offre n\'est pas disponible pour ce trajet'
];

const DRIVER_403 = [
    'response_code' => 'driver_403',
    'message' => 'Le conducteur n\'est pas disponible'
];

const CUSTOMER_STORE_200 = [
    'response_code' => 'customer_store_200',
    'message' => 'Ajouté avec succès'
];

const CUSTOMER_VERIFICATION_400 = [
    'response_code' => 'customer_verification_400',
    'message' => 'Veuillez activer l\'option de vérification du client'
];

const CUSTOMER_404 = [
    'response_code' => 'customer_404',
    'message' => 'Le client n\'existe pas'
];

const CUSTOMER_UPDATE_200 = [
    'response_code' => 'customer_store_200',
    'message' => 'Mise à jour réussie'
];

const CUSTOMER_DELETE_200 = [
    'response_code' => 'customer_delete_200',
    'message' => 'Informations supprimées avec succès'
];

const EMPLOYEE_STORE_200 = [
    'response_code' => 'employee_store_200',
    'message' => 'Ajouté avec succès'
];

const EMPLOYEE_UPDATE_200 = [
    'response_code' => 'employee_store_200',
    'message' => 'Mise à jour réussie'
];

const EMPLOYEE_DELETE_200 = [
    'response_code' => 'employee_delete_200',
    'message' => 'Informations supprimées avec succès'
];

const CUSTOMER_FUND_STORE_200 = [
    'response_code' => 'customer_fund_store_200',
    'message' => 'Ajouté avec succès'
];

// Vehicle Brand
const BRAND_CREATE_200 = [
    'response_code' => 'brand_create_200',
    'message' => 'Marque ajoutée avec succès'
];

const BRAND_UPDATE_200 = [
    'response_code' => 'brand_update_200',
    'message' => 'Marque mise à jour avec succès'
];

const BRAND_DELETE_200 = [
    'response_code' => 'brand_update_200',
    'message' => 'Marque supprimée avec succès'
];

// Vehicle Model
const MODEL_CREATE_200 = [
    'response_code' => 'model_create_200',
    'message' => 'Modèle ajouté avec succès'
];

const MODEL_UPDATE_200 = [
    'response_code' => 'model_update_200',
    'message' => 'Modèle mis à jour avec succès'
];

const MODEL_EXISTS_400 = [
    'response_code' => 'model_exists_400',
    'message' => 'Le modèle existe déjà !'
];

// Vehicle Category
const CATEGORY_CREATE_200 = [
    'response_code' => 'category_create_200',
    'message' => 'Catégorie ajoutée avec succès'
];

const NO_ACTIVE_CATEGORY_IN_ZONE_404 = [
    'response_code' => 'no_active_category_in_zone_404',
    'message' => 'Il n\'y a pas de catégories de véhicules sélectionnées dans votre zone'
];

const CATEGORY_UPDATE_200 = [
    'response_code' => 'category_update_200',
    'message' => 'Catégorie mise à jour avec succès'
];

// Vehicle
const VEHICLE_CREATE_200 = [
    'response_code' => 'vehicle_create_200',
    'message' => 'Véhicule ajouté avec succès'
];

const VEHICLE_UPDATE_200 = [
    'response_code' => 'vehicle_update_200',
    'message' => 'Véhicule mis à jour avec succès'
];

const VEHICLE_DRIVER_EXISTS_403 = [
    'response_code' => 'vehicle_driver_exists_403',
    'message' => 'Vous avez déjà créé un véhicule.'
];

const LEVEL_CREATE_200 = [
    'response_code' => 'level_create_200',
    'message' => 'Niveau ajouté avec succès'
];

const LEVEL_UPDATE_200 = [
    'response_code' => 'level_update_200',
    'message' => 'Niveau mis à jour avec succès'
];

const LEVEL_DELETE_200 = [
    'response_code' => 'level_delete_200',
    'message' => 'Niveau supprimé avec succès'
];

const LEVEL_CREATE_403 = [
    'response_code' => 'level_create_403',
    'message' => 'La séquence du premier niveau doit être 1'
];

const LEVEL_403 = [
    'response_code' => 'level_403',
    'message' => 'Créez d\'abord un niveau'
];

const LEVEL_DELETE_403 = [
    'response_code' => 'level_delete_403',
    'message' => 'Suppression du niveau restreinte lorsque des utilisateurs sont assignés à ce niveau'
];

const BUSINESS_SETTING_UPDATE_200 = [
    'response_code' => 'business_setting_update_200',
    'message' => 'Paramètres mis à jour avec succès'
];

const SYSTEM_SETTING_UPDATE_200 = [
    'response_code' => 'system_setting_update_200',
    'message' => 'Paramètres mis à jour avec succès'
];

// Zone
const ZONE_STORE_200 = [
    'response_code' => 'zone_store_200',
    'message' => 'Zone ajoutée avec succès'
];

const ZONE_STORE_INSTRUCTION_200 = [
    'response_code' => 'zone_store_200',
    'message' => 'Veuillez configurer les tarifs pour cette zone maintenant'
];

const ZONE_UPDATE_200 = [
    'response_code' => 'zone_update_200',
    'message' => 'Zone mise à jour avec succès'
];

const ZONE_DESTROY_200 = [
    'response_code' => 'zone_destroy_200',
    'message' => 'Zone supprimée avec succès'
];

const ZONE_404 = [
    'response_code' => 'zone_404',
    'message' => 'Zone non trouvée'
];

const ZONE_RESOURCE_404 = [
    'response_code' => 'zone_404',
    'message' => 'Service d\'opération non disponible dans cette zone'
];

const ROUTE_NOT_FOUND_404 = [
    'response_code' => 'route_404',
    'message' => 'Route non trouvée pour votre adresse de départ et de destination sélectionnée'
];

// Area
const AREA_STORE_200 = [
    'response_code' => 'area_store_200',
    'message' => 'Zone ajoutée avec succès'
];

const AREA_UPDATE_200 = [
    'response_code' => 'area_update_200',
    'message' => 'Zone mise à jour avec succès'
];

const AREA_DESTROY_200 = [
    'response_code' => 'area_destroy_200',
    'message' => 'Zone supprimée avec succès'
];

const AREA_404 = [
    'response_code' => 'area_404',
    'message' => 'Ressource de la zone non trouvée'
];

const AREA_RESOURCE_404 = [
    'response_code' => 'area_404',
    'message' => 'Aucun fournisseur ou service disponible dans cette zone'
];

// Pick Hour
const PICK_HOUR_STORE_200 = [
    'response_code' => 'pick_hour_store_200',
    'message' => 'Heure de pointe ajoutée avec succès'
];

const PICK_HOUR_UPDATE_200 = [
    'response_code' => 'pick_hour_update_200',
    'message' => 'Heure de pointe mise à jour avec succès'
];

const PICK_HOUR_DESTROY_200 = [
    'response_code' => 'pick_hour_destroy_200',
    'message' => 'Heure de pointe supprimée avec succès'
];

const PICK_HOUR_404 = [
    'response_code' => 'pick_hour_404',
    'message' => 'Ressource de l\'heure de pointe non trouvée'
];

const PICK_HOUR_RESOURCE_404 = [
    'response_code' => 'pick_hour_404',
    'message' => 'Aucun fournisseur ou service disponible pendant cette heure de pointe'
];

const SOCIAL_MEDIA_LINK_STORE_200 = [
    'response_code' => 'social_media_link_store_200',
    'message' => 'Lien de réseau social ajouté avec succès'
];

const SOCIAL_MEDIA_LINK_UPDATE_200 = [
    'response_code' => 'social_media_link_update_200',
    'message' => 'Lien de réseau social mis à jour avec succès'
];

const SOCIAL_MEDIA_LINK_DELETE_200 = [
    'response_code' => 'social_media_link_delete_200',
    'message' => 'Lien de réseau social supprimé avec succès'
];

const TESTIMONIAL_DELETE_200 = [
    'response_code' => 'testimonial_delete_200',
    'message' => 'Témoignage supprimé avec succès'
];

const OUR_SOLUTION_DELETE_200 = [
    'response_code' => 'our_solution_delete_200',
    'message' => 'Notre solution supprimée avec succès'
];


// Banner

const BANNER_STORE_200 = [
    'response_code' => 'banner_store_200',
    'message' => 'Bannière ajoutée avec succès'
];

const BANNER_UPDATE_200 = [
    'response_code' => 'banner_update_200',
    'message' => 'Bannière mise à jour avec succès'
];

const BANNER_DESTROY_200 = [
    'response_code' => 'banner_destroy_200',
    'message' => 'Bannière supprimée avec succès'
];

const BANNER_404 = [
    'response_code' => 'banner_404',
    'message' => 'Ressource de la bannière non trouvée'
];

const BANNER_RESOURCE_404 = [
    'response_code' => 'area_404',
    'message' => 'Aucun fournisseur ou service n\'est disponible dans cette zone'
];

// Milestone

const MILESTONE_STORE_200 = [
    'response_code' => 'milestone_store_200',
    'message' => 'Jalon ajouté avec succès'
];

const MILESTONE_UPDATE_200 = [
    'response_code' => 'milestone_update_200',
    'message' => 'Jalon mis à jour avec succès'
];

const MILESTONE_DESTROY_200 = [
    'response_code' => 'milestone_destroy_200',
    'message' => 'Jalon supprimé avec succès'
];

const MILESTONE_404 = [
    'response_code' => 'milestone_404',
    'message' => 'Ressource du jalon non trouvée'
];

const MILESTONE_RESOURCE_404 = [
    'response_code' => 'milestone_404',
    'message' => 'Aucun'
];

// Discount

const DISCOUNT_STORE_200 = [
    'response_code' => 'discount_store_200',
    'message' => 'Remise ajoutée avec succès'
];

const DISCOUNT_UPDATE_200 = [
    'response_code' => 'discount_update_200',
    'message' => 'Remise mise à jour avec succès'
];

const DISCOUNT_DESTROY_200 = [
    'response_code' => 'discount_destroy_200',
    'message' => 'Remise supprimée avec succès'
];

const DISCOUNT_404 = [
    'response_code' => 'discount_404',
    'message' => 'Ressource de la remise non trouvée'
];

const DISCOUNT_RESOURCE_404 = [
    'response_code' => 'discount_404',
    'message' => 'Remise non trouvée'
];

// BONUS

const BONUS_STORE_200 = [
    'response_code' => 'bonus_store_200',
    'message' => 'Bonus ajouté avec succès'
];

const BONUS_UPDATE_200 = [
    'response_code' => 'bonus_update_200',
    'message' => 'Bonus mis à jour avec succès'
];

const BONUS_DESTROY_200 = [
    'response_code' => 'bonus_destroy_200',
    'message' => 'Bonus supprimé avec succès'
];

const BONUS_404 = [
    'response_code' => 'BONUS_404',
    'message' => 'Ressource de bonus non trouvée'
];

const BONUS_RESOURCE_404 = [
    'response_code' => 'area_404',
    'message' => 'Aucun fournisseur ou service n\'est disponible dans cette zone'
];

// COUPON

const COUPON_STORE_200 = [
    'response_code' => 'coupon_store_200',
    'message' => 'Coupon ajouté avec succès'
];

const COUPON_UPDATE_200 = [
    'response_code' => 'coupon_update_200',
    'message' => 'Coupon mis à jour avec succès'
];

const COUPON_DESTROY_200 = [
    'response_code' => 'coupon_destroy_200',
    'message' => 'Coupon supprimé avec succès'
];

const COUPON_USAGE_LIMIT_406 = [
    'response_code' => 'coupon_usage_limit_406',
    'message' => 'Limite d\'utilisation du coupon dépassée'
];

// Configuration

const CONFIGURATION_UPDATE_200 = [
    'response_code' => 'configuration_update_200',
    'message' => 'Configuration mise à jour avec succès'
];

const LANDING_PAGE_UPDATE_200 = [
    'response_code' => 'landing_page_update_200',
    'message' => 'Page d\'accueil mise à jour avec succès'
];

// Role

const ROLE_STORE_200 = [
    'response_code' => 'role_store_200',
    'message' => 'Rôle ajouté avec succès'
];

const ROLE_UPDATE_200 = [
    'response_code' => 'role_update_200',
    'message' => 'Rôle mis à jour avec succès'
];

const ROLE_DESTROY_200 = [
    'response_code' => 'role_destroy_200',
    'message' => 'Rôle supprimé avec succès'
];

// Trip fare

const TRIP_FARE_STORE_200 = [
    'response_code' => 'trip_fare_store_200',
    'message' => 'Tarif de trajet ajouté avec succès'
];

const TRIP_FARE_UPDATE_200 = [
    'response_code' => 'trip_fare_update_200',
    'message' => 'Tarif de trajet mis à jour avec succès'
];

const TRIP_FARE_DESTROY_200 = [
    'response_code' => 'trip_fare_destroy_200',
    'message' => 'Tarif de trajet supprimé avec succès'
];

// Parcel fare

const PARCEL_FARE_STORE_200 = [
    'response_code' => 'parcel_fare_store_200',
    'message' => 'Tarif de colis ajouté avec succès'
];

const PARCEL_FARE_UPDATE_200 = [
    'response_code' => 'parcel_fare_update_200',
    'message' => 'Tarif de colis mis à jour avec succès'
];

const PARCEL_FARE_DESTROY_200 = [
    'response_code' => 'parcel_fare_destroy_200',
    'message' => 'Tarif de colis supprimé avec succès'
];



// Parcel Category

const PARCEL_CATEGORY_UPDATE_200 = [
    'response_code' => 'parcel_category_update_200',
    'message' => 'Catégorie de colis mise à jour avec succès'
];

const PARCEL_CATEGORY_STORE_200 = [
    'response_code' => 'parcel_category_store_200',
    'message' => 'Catégorie de colis ajoutée avec succès'
];

const PARCEL_CATEGORY_DESTROY_200 = [
    'response_code' => 'parcel_category_destroy_200',
    'message' => 'Catégorie de colis supprimée avec succès'
];

// Parcel Weight

const PARCEL_WEIGHT_UPDATE_200 = [
    'response_code' => 'parcel_weight_update_200',
    'message' => 'Poids du colis mis à jour avec succès'
];

const PARCEL_WEIGHT_STORE_200 = [
    'response_code' => 'parcel_weight_store_200',
    'message' => 'Poids du colis ajouté avec succès'
];

const PARCEL_WEIGHT_EXISTS_403 = [
    'response_code' => 'parcel_weight_exists_403',
    'message' => 'Chevauchement du poids du colis'
];

const PARCEL_WEIGHT_DESTROY_200 = [
    'response_code' => 'parcel_weight_destroy_200',
    'message' => 'Poids du colis supprimé avec succès'
];

const PARCEL_WEIGHT_404 = [
    'response_code' => 'parcel_weight_404',
    'message' => 'Définissez d\'abord le poids du colis'
];

// TRIP

const TRIP_REQUEST_STORE_200 = [
    'response_code' => 'trip_request_store_200',
    'message' => 'Demande de voyage placée avec succès'
];

const TRIP_REQUEST_DELETE_200 = [
    'response_code' => 'trip_request_delete_200',
    'message' => 'Demande de voyage supprimée avec succès'
];

const TRIP_REQUEST_DRIVER_403 = [
    'response_code' => 'trip_request_driver_403',
    'message' => 'Conducteur déjà assigné à ce voyage'
];

const TRIP_REQUEST_404 = [
    'response_code' => 'trip_request_403',
    'message' => 'Demande de voyage non trouvée'
];

const TRIP_STATUS_NOT_COMPLETED_200 = [
    'response_code' => 'trip_status_200',
    'message' => 'Voyage non encore terminé'
];

const TRIP_STATUS_COMPLETED_403 = [
    'response_code' => 'trip_status_200',
    'message' => 'Voyage déjà terminé'
];

const TRIP_STATUS_CANCELLED_403 = [
    'response_code' => 'trip_status_200',
    'message' => 'Voyage déjà annulé'
];

const REVIEW_403 = [
    'response_code' => 'review_409',
    'message' => 'Avis déjà soumis'
];

const REVIEW_SUBMIT_403 = [
    'response_code' => 'review_submit_409',
    'message' => 'La soumission des avis est désactivée'
];

const REVIEW_404 = [
    'response_code' => 'review_404',
    'message' => 'Avis non trouvé'
];

const LANGUAGE_UPDATE_FAIL_200 = [
    'response_code' => 'language_status_update_fail_200',
    'message' => 'Le statut de la langue par défaut ne peut pas être modifié ou supprimé'
];

// OTP

const OTP_MISMATCH_404 = [
    'response_code' => 'otp_mismatch_404',
    'message' => 'Le code OTP ne correspond pas'
];

// BID

const BIDDING_LIMIT_429 = [
    'response_code' => 'bidding_limit_429',
    'message' => 'Limite de soumission pour cette demande de voyage dépassée'
];

const RAISING_BID_FARE_403 = [
    'response_code' => 'raising_bid_fare_403',
    'message' => 'Le tarif de l\'offre ne peut pas être identique ou inférieur au tarif de l\'offre initiale'
];

const BIDDING_ACTION_200 = [
    'response_code' => 'bidding_action_200',
    'message' => 'Action de soumission mise à jour avec succès'
];

const BIDDING_SUBMITTED_403 = [
    'response_code' => 'bidding_submitted_403',
    'message' => 'Soumission déjà effectuée'
];

const MAXIMUM_INTERMEDIATE_POINTS_403 = [
    'response_code' => 'maximum_intermediate_points_403',
    'message' => 'Plus de points intermédiaires ne peuvent pas être définis'
];

const COUPON_AREA_NOT_VALID_403 = [
    'response_code' => 'coupon_area_not_valid_403',
    'message' => 'Le code du coupon n\'appartient pas à votre zone actuelle'
];

const COUPON_VEHICLE_CATEGORY_NOT_VALID_403 = [
    'response_code' => 'coupon_vehicle_category_not_valid_403',
    'message' => 'Catégorie de véhicule non trouvée pour ce coupon'
];

const USER_LAST_LOCATION_NOT_AVAILABLE_404 = [
    'response_code' => 'user_last_location_not_available_404',
    'message' => 'Dernière position de l\'utilisateur non disponible'
];

const INCOMPLETE_RIDE_403 = [
    'response_code' => 'incomplete_ride_403',
    'message' => 'Veuillez terminer le trajet précédent d\'abord'
];

const DRIVER_UNAVAILABLE_403 = [
    'response_code' => 'driver_unavailable_403',
    'message' => 'Veuillez changer votre statut hors ligne'
];

const CHAT_UNAVAILABLE_403 = [
    'response_code' => 'chat_unavailable_403',
    'message' => 'Le chat est disponible uniquement pendant un trajet actif'
];

const PARCEL_WEIGHT_400 = [
    'response_code' => 'parcel_weight_400',
    'message' => 'Le poids du colis n\'est pas acceptable'
];

// Erreurs de portefeuille
const INSUFFICIENT_FUND_403 = [
    'response_code' => 'insufficient_fund_403',
    'message' => 'Votre solde de portefeuille est insuffisant'
];

const INSUFFICIENT_POINTS_403 = [
    'response_code' => 'insufficient_points_403',
    'message' => 'Vous avez des points de fidélité insuffisants'
];

const WITHDRAW_REQUEST_200 = [
    'response_code' => 'withdraw_request_200',
    'message' => 'Demande de retrait envoyée pour approbation par l\'administrateur'
];

const DRIVER_REQUEST_ACCEPT_TIMEOUT_408 = [
    'response_code' => 'driver_request_accept_timeout_408',
    'message' => 'La demande de voyage a déjà expiré'
];

const NEGATIVE_VALUE = [
    'message' => 'La valeur négative n\'est pas acceptable'
];

const MAX_VALUE = [
    'message' => 'La valeur maximale peut être supérieure à 10'
];

const COUPON_APPLIED_403 = [
    'response_code' => 'coupon_applied_403',
    'message' => 'Coupon déjà appliqué sur ce trajet'
];

const COUPON_APPLIED_200 = [
    'response_code' => 'coupon_applied_200',
    'message' => 'Coupon appliqué avec succès'
];

const COUPON_REMOVED_200 = [
    'response_code' => 'coupon_removed_200',
    'message' => 'Coupon retiré avec succès'
];

const SELF_REGISTRATION_400 = [
    'response_code' => 'self_registration_400',
    'message' => 'L\'auto-inscription est désactivée. Contactez l\'administrateur pour l\'inscription'
];

const LAST_LOCATION_404 = [
    'response_code' => 'last_location_404',
    'message' => 'Dernière position de l\'utilisateur non trouvée'
];

const VEHICLE_CATEGORY_404 = [
    'response_code' => 'vehicle_category_404',
    'message' => 'Aucune catégorie de véhicule trouvée. Veuillez activer ou créer une nouvelle catégorie de véhicule'
];
