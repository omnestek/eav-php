-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Table `eav_entity_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eav_entity_type` (
  `entity_type_id` INT NOT NULL,
  `entity_type_code` VARCHAR(45) NOT NULL,
  `entity_type_description` VARCHAR(255) NOT NULL,
  `entity_type_table` VARCHAR(255) NOT NULL,
  `entity_type_status` TINYINT NOT NULL,
  `entity_type_value_table_prefix` VARCHAR(255) NOT NULL,
  `entity_type_ddl_description` VARCHAR(255) NULL,
  PRIMARY KEY (`entity_type_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eav_attributes_set`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eav_attributes_set` (
  `attributes_set_id` INT NOT NULL,
  `attributes_entity_type_id` INT NOT NULL,
  `attributes_set_name` VARCHAR(255) NOT NULL,
  `attributes_set_description` VARCHAR(255) NOT NULL,
  `attributes_set_ddl_description` VARCHAR(255) NULL,
  PRIMARY KEY (`attributes_set_id`),
  INDEX `fk_attributes_set_entity_type_idx` (`attributes_entity_type_id` ASC),
  CONSTRAINT `fk_attributes_set_entity_type`
    FOREIGN KEY (`attributes_entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eav_attributes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eav_attributes` (
  `attribute_id` INT NOT NULL,
  `attribute_entity_type_id` INT NOT NULL,
  `attribute_attribute_set_id` INT NOT NULL,
  `attribute_name` VARCHAR(255) NOT NULL,
  `attribute_description` VARCHAR(255) NOT NULL,
  `attribute_type` VARCHAR(45) NOT NULL,
  `attribute_table` VARCHAR(45) NOT NULL COMMENT '	',
  `attribute_status` TINYINT NOT NULL,
  `attribute_set` INT NOT NULL,
  `attribute_html_class` VARCHAR(255) NOT NULL,
  `attribute_html_input` VARCHAR(255) NOT NULL,
  `attribute_html_label` VARCHAR(255) NOT NULL,
  `attribute_visible` TINYINT NOT NULL,
  `attribute_required` TINYINT NOT NULL,
  `attribute_searchable` TINYINT NOT NULL,
  `attribute_is_unique` TINYINT NOT NULL,
  `attribute_is_encrypted` TINYINT NOT NULL,
  `attribute_sort` INT NOT NULL,
  `attribute_ddl_description` VARCHAR(255) NULL,
  `attribute_is_array` TINYINT NOT NULL,
  PRIMARY KEY (`attribute_id`),
  INDEX `fk_attribute_entity_type_idx` (`attribute_entity_type_id` ASC),
  INDEX `fk_attribute_attribute_set_idx` (`attribute_attribute_set_id` ASC),
  CONSTRAINT `fk_attribute_entity_type`
    FOREIGN KEY (`attribute_entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_attribute_attribute_set`
    FOREIGN KEY (`attribute_attribute_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eav_entity_attribute_groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eav_entity_attribute_groups` (
  `entity_attribute_group_id` INT NOT NULL,
  `entity_attribute_group_entity_type_id` INT NOT NULL,
  `entity_attribute_group_description` VARCHAR(255) NOT NULL,
  `entity_attribute_group_status` TINYINT NOT NULL,
  `entity_attribute_group_ddl_description` VARCHAR(255) NULL,
  PRIMARY KEY (`entity_attribute_group_id`),
  INDEX `fk_entity_groups_entity_type_idx` (`entity_attribute_group_entity_type_id` ASC),
  CONSTRAINT `fk_entity_groups_entity_type`
    FOREIGN KEY (`entity_attribute_group_entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eav_entity_attribute_group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eav_entity_attribute_group` (
  `entity_attribute_group_id` INT NOT NULL,
  `entity_attribute_id` INT NOT NULL,
  `entity_group_id` INT NOT NULL,
  `entity_group_order` INT NOT NULL,
  `entity_group_status` VARCHAR(45) NOT NULL,
  `entity_group_entity_type_id` INT NOT NULL,
  PRIMARY KEY (`entity_attribute_group_id`),
  INDEX `fk_entity_attribute_group_attributes_idx` (`entity_attribute_id` ASC),
  INDEX `fk_entity_attribute_group_entity_attribute_groups_idx` (`entity_group_id` ASC),
  INDEX `fk_entity_attribute_group_entity_type_idx` (`entity_group_entity_type_id` ASC),
  CONSTRAINT `fk_entity_attribute_group_attributes`
    FOREIGN KEY (`entity_attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entity_attribute_group_entity_attribute_groups`
    FOREIGN KEY (`entity_group_id`)
    REFERENCES `eav_entity_attribute_groups` (`entity_attribute_group_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entity_attribute_group_entity_type`
    FOREIGN KEY (`entity_group_entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eav_attribute_option`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eav_attribute_option` (
  `attribute_option_id` INT NOT NULL,
  `attribute_option_attribute_id` INT NOT NULL,
  `attribute_value` VARCHAR(255) NOT NULL,
  `attribute_option_sort` INT NOT NULL,
  `attribute_active` TINYINT NOT NULL DEFAULT 1,
  PRIMARY KEY (`attribute_option_id`),
  INDEX `fk_attribute_option_attributes_idx` (`attribute_option_attribute_id` ASC),
  CONSTRAINT `fk_attribute_option_attributes`
    FOREIGN KEY (`attribute_option_attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eav_relations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eav_relations` (
  `relation_id` INT NOT NULL,
  `relation_code` VARCHAR(45) NOT NULL,
  `relation_description` VARCHAR(45) NOT NULL,
  `relation_active` INT NOT NULL DEFAULT '1',
  PRIMARY KEY (`relation_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `eav_relations_types`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `eav_relations_types` (
  `relation_type_id` INT NOT NULL,
  `relation_relation_id` INT NOT NULL,
  `relation_description` VARCHAR(45) NOT NULL,
  `relation_active` TINYINT NOT NULL DEFAULT 1,
  `relation_entity_type_a` INT NOT NULL,
  `relation_entity_type_b` INT NOT NULL,
  PRIMARY KEY (`relation_type_id`),
  INDEX `fk_relations_types_relations_idx` (`relation_relation_id` ASC),
  INDEX `fk_relations_entity_type_a_idx` (`relation_entity_type_a` ASC),
  INDEX `fk_relations_entity_type_b_idx` (`relation_entity_type_b` ASC),
  CONSTRAINT `fk_relations_types_relations`
    FOREIGN KEY (`relation_relation_id`)
    REFERENCES `eav_relations` (`relation_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_relations_entity_type_a`
    FOREIGN KEY (`relation_entity_type_a`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_relations_entity_type_b`
    FOREIGN KEY (`relation_entity_type_b`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entities` (
  `entity_id` INT NOT NULL,
  `entity_type_id` INT NOT NULL,
  `entity_parent` INT NOT NULL,
  `entity_attributes_set_id` INT NOT NULL,
  `entity_unique_string_key` VARCHAR(255) NOT NULL,
  `entity_created_at` DATETIME NOT NULL,
  `entity_updated_at` DATETIME NOT NULL,
  `entity_active` TINYINT NOT NULL,
  PRIMARY KEY (`entity_id`),
  INDEX `fk_entities_entity_type_idx` (`entity_type_id` ASC),
  INDEX `fk_entities_attributes_set_idx` (`entity_attributes_set_id` ASC),
  UNIQUE INDEX `entity_unique_string_key_UNIQUE` (`entity_type_id` ASC, `entity_unique_string_key` ASC),
  CONSTRAINT `fk_entites_entity_type`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_entities`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `entities` (`entity_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entites_attributes_set`
    FOREIGN KEY (`entity_attributes_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entities_varchar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entities_varchar` (
  `value_id` INT NOT NULL,
  `entity_id` INT NOT NULL,
  `entity_type_id` INT NOT NULL,
  `attribute_id` INT NOT NULL,
  `attributes_set_id` INT NOT NULL,
  `value` VARCHAR(255) NOT NULL,
  `order` INT NOT NULL,
  `active` INT NOT NULL,
  PRIMARY KEY (`value_id`),
  INDEX `fk_entities_varchar_entities_idx` (`entity_id` ASC),
  INDEX `fk_entities_varchar_entity_type_idx` (`entity_type_id` ASC),
  INDEX `fk_entities_varchar_entity_attribute_idx` (`attribute_id` ASC),
  INDEX `fk_entities_varchar_attributes_set_idx` (`attributes_set_id` ASC),
  CONSTRAINT `fk_entities_varchar_entities`
    FOREIGN KEY (`entity_id`)
    REFERENCES `entities` (`entity_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_varchar_entity_type`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_varchar_entity_attribute`
    FOREIGN KEY (`attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_varchar_attributes_set`
    FOREIGN KEY (`attributes_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entities_varchar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entities_varchar` (
  `value_id` INT NOT NULL,
  `entity_id` INT NOT NULL,
  `entity_type_id` INT NOT NULL,
  `attribute_id` INT NOT NULL,
  `attributes_set_id` INT NOT NULL,
  `value` VARCHAR(255) NOT NULL,
  `order` INT NOT NULL,
  `active` INT NOT NULL,
  PRIMARY KEY (`value_id`),
  INDEX `fk_entities_varchar_entities_idx` (`entity_id` ASC),
  INDEX `fk_entities_varchar_entity_type_idx` (`entity_type_id` ASC),
  INDEX `fk_entities_varchar_entity_attribute_idx` (`attribute_id` ASC),
  INDEX `fk_entities_varchar_attributes_set_idx` (`attributes_set_id` ASC),
  CONSTRAINT `fk_entities_varchar_entities`
    FOREIGN KEY (`entity_id`)
    REFERENCES `entities` (`entity_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_varchar_entity_type`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_varchar_entity_attribute`
    FOREIGN KEY (`attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_varchar_attributes_set`
    FOREIGN KEY (`attributes_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entities_datetime`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entities_datetime` (
  `value_id` INT NOT NULL,
  `entity_id` INT NOT NULL,
  `entity_type_id` INT NOT NULL,
  `attribute_id` INT NOT NULL,
  `attributes_set_id` INT NOT NULL,
  `value` DATETIME NOT NULL,
  `order` INT NOT NULL,
  `active` INT NOT NULL,
  PRIMARY KEY (`value_id`),
  INDEX `fk_entities_datetime_entites_idx` (`entity_id` ASC),
  INDEX `fk_entities_datetime_entity_type_idx` (`entity_type_id` ASC),
  INDEX `fk_entities_datetime_attributes_set_idx` (`attributes_set_id` ASC),
  INDEX `fk_entities_datetime_attributes_idx` (`attribute_id` ASC),
  CONSTRAINT `fk_entites_datetime_entites`
    FOREIGN KEY (`entity_id`)
    REFERENCES `entities` (`entity_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entites_datetime_entity_type`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entites_datetime_attributes_set`
    FOREIGN KEY (`attributes_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entites_datetime_attributes`
    FOREIGN KEY (`attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entities_decimal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entities_decimal` (
  `value_id` INT NOT NULL,
  `entity_id` INT NOT NULL,
  `entity_type_id` INT NOT NULL,
  `attribute_id` INT NOT NULL,
  `attributes_set_id` INT NOT NULL,
  `value` DECIMAL NOT NULL,
  `order` INT NOT NULL,
  `active` INT NOT NULL,
  PRIMARY KEY (`value_id`),
  INDEX `fk_entities_decimal_entity_idx` (`entity_id` ASC),
  INDEX `fk_entities_decimal_entity_type_idx` (`entity_type_id` ASC),
  INDEX `fk_entities_decimal_attributes_set_idx` (`attributes_set_id` ASC),
  INDEX `fk_entities_decimal_attributes_idx` (`attribute_id` ASC),
  CONSTRAINT `fk_entites_decimal_entity_type`
    FOREIGN KEY (`entity_id`)
    REFERENCES `entities` (`entity_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_decimal_entity_type`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_decimal_attributes_set`
    FOREIGN KEY (`attributes_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entites_decimal_attributes`
    FOREIGN KEY (`attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entities_int`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entities_int` (
  `value_id` INT NOT NULL,
  `entity_id` INT NOT NULL,
  `entity_type_id` INT NOT NULL,
  `attribute_id` INT NOT NULL,
  `attributes_set_id` INT NOT NULL,
  `value` INT NOT NULL,
  `order` INT NOT NULL,
  `active` INT NOT NULL,
  PRIMARY KEY (`value_id`),
  INDEX `fk_entities_int_entity_id_idx` (`entity_id` ASC),
  INDEX `fk_entities_int_entity_type_idx` (`entity_type_id` ASC),
  INDEX `fk_entities_int_attributes_idx` (`attribute_id` ASC),
  INDEX `fk_entities_int_attributes_set_idx` (`attributes_set_id` ASC),
  CONSTRAINT `fk_entities_int_entities`
    FOREIGN KEY (`entity_id`)
    REFERENCES `entities` (`entity_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entites_int_entity_type`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_int_attributes`
    FOREIGN KEY (`attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_int_attributes_set`
    FOREIGN KEY (`attributes_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entities_text`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entities_text` (
  `value_id` INT NOT NULL,
  `entity_id` INT NOT NULL,
  `entity_type_id` INT NOT NULL,
  `attribute_id` INT NOT NULL,
  `attributes_set_id` INT NOT NULL,
  `value` TEXT NOT NULL,
  `order` INT NOT NULL,
  `active` INT NOT NULL,
  PRIMARY KEY (`value_id`),
  INDEX `fk_entities_text_entities_idx` (`entity_id` ASC),
  INDEX `fk_entities_text_entity_type_idx` (`entity_type_id` ASC),
  INDEX `fk_entities_text_attributes_set_idx` (`attributes_set_id` ASC),
  INDEX `fk_entities_text_attributes_idx` (`attribute_id` ASC),
  CONSTRAINT `fk_entities_text_entities`
    FOREIGN KEY (`entity_id`)
    REFERENCES `entities` (`entity_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_text_entity_type`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_text_attributes`
    FOREIGN KEY (`attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_text_attributes_set`
    FOREIGN KEY (`attributes_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `entities_blob`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `entities_blob` (
  `value_id` INT NOT NULL,
  `entity_id` INT NOT NULL,
  `entity_type_id` INT NOT NULL,
  `attribute_id` INT NOT NULL,
  `attributes_set_id` INT NOT NULL,
  `value` BLOB NOT NULL,
  `order` INT NOT NULL,
  `active` INT NOT NULL,
  PRIMARY KEY (`value_id`),
  INDEX `fk_entities_blob_entities_idx` (`entity_id` ASC),
  INDEX `fk_entities_blob_entity_type_idx` (`entity_type_id` ASC),
  INDEX `fk_entities_blob_attributes_idx` (`attribute_id` ASC),
  INDEX `fk_entities_blob_attributes_set_idx` (`attributes_set_id` ASC),
  CONSTRAINT `fk_entities_blob_entities`
    FOREIGN KEY (`entity_id`)
    REFERENCES `entities` (`entity_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_blob_entity_type`
    FOREIGN KEY (`entity_type_id`)
    REFERENCES `eav_entity_type` (`entity_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_blob_attributes`
    FOREIGN KEY (`attribute_id`)
    REFERENCES `eav_attributes` (`attribute_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_entities_blob_attributes_set`
    FOREIGN KEY (`attributes_set_id`)
    REFERENCES `eav_attributes_set` (`attributes_set_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `relations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `relations` (
  `relation_id` INT NOT NULL,
  `relation_type_id` INT NOT NULL,
  `relation_entity_id_a` VARCHAR(45) NOT NULL,
  `relation_entity_id_b` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`relation_id`),
  INDEX `fk_relations_relations_type_idx` (`relation_type_id` ASC),
  CONSTRAINT `fk_relations_relations_type`
    FOREIGN KEY (`relation_type_id`)
    REFERENCES `eav_relations_types` (`relation_type_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
