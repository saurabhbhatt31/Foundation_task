CREATE TABLE `admin` (
  `name` varchar(255),
  `email` varchar(255),
  `password` varhcar
);

CREATE TABLE `existing_users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255),
  `email` varchar(255),
  `inv_code` varchar(255),
  `inv_link` varchar(255)
);

CREATE TABLE `invited_users` (
  `inv_users_id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `password` varchar(255)
);

CREATE TABLE `signup_user_detail` (
  `inv_users_id` int PRIMARY KEY,
  `invited_by` varchar(255),
  `invitation_method` varchar(255),
  `invitation_code` varchar(255) current_timestamp(),
   `invitation_link` varchar(255) current_timestamp(),
   // NOTE :-(we will delete invitation_field and invitation_link field 
  //creating a function after 24 hours to current_timestamp())
 
);

ALTER TABLE `invited_users` ADD FOREIGN KEY (`inv_users_id`) REFERENCES `existing_users` (`id`);

ALTER TABLE `signup_user_detail` ADD FOREIGN KEY (`inv_users_id`) REFERENCES `existing_users` (`id`);
