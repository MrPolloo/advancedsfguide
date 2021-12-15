/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 100421
 Source Host           : localhost:3306
 Source Schema         : slimefun

 Target Server Type    : MySQL
 Target Server Version : 100421
 File Encoding         : 65001

 Date: 15/12/2021 09:02:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`category_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, 'Weapons');
INSERT INTO `category` VALUES (2, 'Useful Items');
INSERT INTO `category` VALUES (3, 'Tools');
INSERT INTO `category` VALUES (4, 'Resources');
INSERT INTO `category` VALUES (5, 'Magical Items');
INSERT INTO `category` VALUES (6, 'Magical Armor');
INSERT INTO `category` VALUES (7, 'Technical Components');
INSERT INTO `category` VALUES (8, 'Miscellaneous');
INSERT INTO `category` VALUES (9, 'Armor');
INSERT INTO `category` VALUES (10, 'Talisman (Tier1)');
INSERT INTO `category` VALUES (11, 'Magical Gadgets');
INSERT INTO `category` VALUES (12, 'Technical Gadgets');
INSERT INTO `category` VALUES (13, 'Talisman (Tier2)');
INSERT INTO `category` VALUES (14, 'Energy and Electricity');
INSERT INTO `category` VALUES (15, 'GPS');
INSERT INTO `category` VALUES (16, 'Cargo');

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS `items`;
CREATE TABLE `items`  (
  `items_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(10) UNSIGNED NOT NULL,
  `items` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`items_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 104 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of items
-- ----------------------------
INSERT INTO `items` VALUES (1, 1, 'Grandmas Walking Stick');
INSERT INTO `items` VALUES (2, 1, 'Grandpas Walking Stick');
INSERT INTO `items` VALUES (3, 1, 'Sword Of Beheading');
INSERT INTO `items` VALUES (4, 1, 'Blade Of Vampires');
INSERT INTO `items` VALUES (5, 1, 'Explosive Bow');
INSERT INTO `items` VALUES (6, 1, 'Icy Bow');
INSERT INTO `items` VALUES (7, 2, 'Portable Crafter');
INSERT INTO `items` VALUES (8, 2, 'Portable Dustbin');
INSERT INTO `items` VALUES (9, 2, 'Rag');
INSERT INTO `items` VALUES (10, 2, 'Bandage');
INSERT INTO `items` VALUES (11, 2, 'Splint');
INSERT INTO `items` VALUES (12, 2, 'Vitamins');
INSERT INTO `items` VALUES (13, 2, 'Medicine');
INSERT INTO `items` VALUES (14, 2, 'Small Backpack');
INSERT INTO `items` VALUES (15, 2, 'Backpack');
INSERT INTO `items` VALUES (16, 2, 'Large Backpack');
INSERT INTO `items` VALUES (17, 2, 'Woven Backpack');
INSERT INTO `items` VALUES (18, 2, 'Gilded Backpack');
INSERT INTO `items` VALUES (19, 2, 'Radiant Backpack');
INSERT INTO `items` VALUES (20, 2, 'Cooler');
INSERT INTO `items` VALUES (21, 2, 'Tape Measure');
INSERT INTO `items` VALUES (22, 3, 'Gold Pan');
INSERT INTO `items` VALUES (23, 3, 'Nether Gold Pan');
INSERT INTO `items` VALUES (24, 3, 'Grappling Hook');
INSERT INTO `items` VALUES (25, 3, 'Smelter\'s Pickaxe');
INSERT INTO `items` VALUES (26, 3, 'Lumber Axe');
INSERT INTO `items` VALUES (27, 3, 'Hercules Pickaxe');
INSERT INTO `items` VALUES (28, 3, 'Explosive Pickaxe');
INSERT INTO `items` VALUES (29, 3, 'Pickaxe of the Seeker');
INSERT INTO `items` VALUES (30, 3, 'Cobalt Pickaxe');
INSERT INTO `items` VALUES (31, 3, 'Pickaxe of Vein Mining');
INSERT INTO `items` VALUES (32, 3, 'Climbing Pick');
INSERT INTO `items` VALUES (33, 4, 'Reinforced Alloy Ingot');
INSERT INTO `items` VALUES (34, 4, 'Hardened Metal');
INSERT INTO `items` VALUES (35, 4, 'Damascus Steel Ingot');
INSERT INTO `items` VALUES (36, 4, 'Steel Ingot');
INSERT INTO `items` VALUES (37, 4, 'Bronze Ingot');
INSERT INTO `items` VALUES (38, 4, 'Duralumin Ingot');
INSERT INTO `items` VALUES (39, 4, 'Billon Ingot');
INSERT INTO `items` VALUES (40, 4, 'Brass Ingot');
INSERT INTO `items` VALUES (41, 4, 'Aluminum Brass Ingot');
INSERT INTO `items` VALUES (42, 4, 'Aluminum Bronze Ingot');
INSERT INTO `items` VALUES (43, 4, 'Solder Ingot');
INSERT INTO `items` VALUES (44, 4, 'Synthetic Sapphire');
INSERT INTO `items` VALUES (45, 4, 'Synthetic Diamond');
INSERT INTO `items` VALUES (46, 4, 'Raw Carbonado');
INSERT INTO `items` VALUES (47, 4, 'Nickel Ingot');
INSERT INTO `items` VALUES (48, 4, 'Cobalt Ingot');
INSERT INTO `items` VALUES (49, 4, 'Carbonado');
INSERT INTO `items` VALUES (50, 4, 'Ferrosilicon');
INSERT INTO `items` VALUES (51, 4, 'Sulfate');
INSERT INTO `items` VALUES (52, 4, 'Carbon');
INSERT INTO `items` VALUES (53, 4, 'Compressed Carbon');
INSERT INTO `items` VALUES (54, 4, 'Carbon Chunk');
INSERT INTO `items` VALUES (55, 4, 'Gold Ingot (24-Carat)');
INSERT INTO `items` VALUES (56, 4, 'Gold Ingot (22-Carat)');
INSERT INTO `items` VALUES (57, 4, 'Gold Ingot (20-Carat)');
INSERT INTO `items` VALUES (58, 4, 'Gold Ingot (18-Carat)');
INSERT INTO `items` VALUES (59, 4, 'Gold Ingot (16-Carat)');
INSERT INTO `items` VALUES (60, 4, 'Gold Ingot (14-Carat)');
INSERT INTO `items` VALUES (61, 4, 'Gold Ingot (12-Carat)');
INSERT INTO `items` VALUES (62, 4, 'Gold Ingot (10-Carat)');
INSERT INTO `items` VALUES (63, 4, 'Gold Ingot (8-Carat)');
INSERT INTO `items` VALUES (64, 4, 'Gold Ingot (6-Carat)');
INSERT INTO `items` VALUES (65, 4, 'Gold Ingot (4-Carat)');
INSERT INTO `items` VALUES (66, 4, 'Silicon');
INSERT INTO `items` VALUES (67, 4, 'Gilded Iron');
INSERT INTO `items` VALUES (68, 4, 'Synthetic Emerald');
INSERT INTO `items` VALUES (69, 4, 'Uranium');
INSERT INTO `items` VALUES (70, 4, 'Redstone Alloy Ingot');
INSERT INTO `items` VALUES (71, 4, 'Magnesium Salt');
INSERT INTO `items` VALUES (72, 4, 'Blistering Ingot (33%)');
INSERT INTO `items` VALUES (73, 4, 'Blistering Ingot (66%)');
INSERT INTO `items` VALUES (74, 4, 'Blistering Ingot');
INSERT INTO `items` VALUES (75, 4, 'Enriched Nether Ice');
INSERT INTO `items` VALUES (76, 4, 'Neptunium');
INSERT INTO `items` VALUES (77, 4, 'Plutonium');
INSERT INTO `items` VALUES (78, 4, 'Boosted Uranium');
INSERT INTO `items` VALUES (79, 4, 'Bucket Of Oil');
INSERT INTO `items` VALUES (80, 4, 'Bucket Of Fuel');
INSERT INTO `items` VALUES (81, 5, 'Magical Lump - I');
INSERT INTO `items` VALUES (82, 5, 'Magical Lump - II');
INSERT INTO `items` VALUES (83, 5, 'Magical Lump - III');
INSERT INTO `items` VALUES (84, 5, 'Ender Lump - I');
INSERT INTO `items` VALUES (85, 5, 'Ender Lump - II');
INSERT INTO `items` VALUES (86, 5, 'Ender Lump - III');
INSERT INTO `items` VALUES (87, 5, 'Magical Book Cover');
INSERT INTO `items` VALUES (88, 5, 'Magical Class');
INSERT INTO `items` VALUES (89, 5, 'Lava Crystal');
INSERT INTO `items` VALUES (90, 5, 'Common Talisman');
INSERT INTO `items` VALUES (91, 5, 'Necrotic Skull');
INSERT INTO `items` VALUES (92, 5, 'Essence Of Afterlife');
INSERT INTO `items` VALUES (93, 5, 'Synthetic Shulker Shell');
INSERT INTO `items` VALUES (94, 5, 'Blank Rune');
INSERT INTO `items` VALUES (95, 5, 'Ancient Rune [Air]');
INSERT INTO `items` VALUES (96, 5, 'Ancient Rune [Earth]');
INSERT INTO `items` VALUES (97, 5, 'Ancient Rune [Fire]');
INSERT INTO `items` VALUES (98, 5, 'Ancient Rune [Water]');
INSERT INTO `items` VALUES (99, 5, 'Ancient Rune [Ender]');
INSERT INTO `items` VALUES (100, 5, 'Ancient Rune [Lightning]');
INSERT INTO `items` VALUES (101, 5, 'Ancient Rune [Rainbow]');
INSERT INTO `items` VALUES (102, 5, 'Ancient Rune [Soulbound]');

-- ----------------------------
-- Table structure for logintoken
-- ----------------------------
DROP TABLE IF EXISTS `logintoken`;
CREATE TABLE `logintoken`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `userid` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of logintoken
-- ----------------------------
INSERT INTO `logintoken` VALUES (12, '5900c86c86fc4b115a34fcfe8d73aee73bb0007d', 1);

-- ----------------------------
-- Table structure for recipes
-- ----------------------------
DROP TABLE IF EXISTS `recipes`;
CREATE TABLE `recipes`  (
  `items_id` int(10) NOT NULL,
  `recipe` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of recipes
-- ----------------------------
INSERT INTO `recipes` VALUES (1, 'Oak Log', 3);
INSERT INTO `recipes` VALUES (2, 'Oak Log', 3);
INSERT INTO `recipes` VALUES (2, 'Leather', 2);
INSERT INTO `recipes` VALUES (3, 'Emerald', 2);
INSERT INTO `recipes` VALUES (3, 'Blaze Rod', 1);
INSERT INTO `recipes` VALUES (3, 'Nether Wart', 4);
INSERT INTO `recipes` VALUES (4, 'Wither Skeleton Skull', 2);
INSERT INTO `recipes` VALUES (4, 'Blaze Rod', 1);
INSERT INTO `recipes` VALUES (5, 'Gunpowder', 4);
INSERT INTO `recipes` VALUES (5, 'Netherrack', 16);
INSERT INTO `recipes` VALUES (5, 'Stick', 4);
INSERT INTO `recipes` VALUES (5, 'Nether Wart', 73);
INSERT INTO `recipes` VALUES (5, 'Book', 4);
INSERT INTO `recipes` VALUES (5, 'Blaze Powder', 7);
INSERT INTO `recipes` VALUES (5, 'Flint And Steel', 1);
INSERT INTO `recipes` VALUES (5, 'Coal', 2);
INSERT INTO `recipes` VALUES (5, 'Dirt', 2);
INSERT INTO `recipes` VALUES (5, 'Stone', 6);
INSERT INTO `recipes` VALUES (5, 'Obsidian', 3);
INSERT INTO `recipes` VALUES (6, 'Ice', 2);
INSERT INTO `recipes` VALUES (6, 'Packed Ice', 1);
INSERT INTO `recipes` VALUES (6, 'Stick', 2);
INSERT INTO `recipes` VALUES (6, 'Lily Pad', 2);
INSERT INTO `recipes` VALUES (6, 'Nether Wart', 66);
INSERT INTO `recipes` VALUES (6, 'Book', 4);
INSERT INTO `recipes` VALUES (7, 'Book', 1);
INSERT INTO `recipes` VALUES (7, 'Crafting Table', 1);
INSERT INTO `recipes` VALUES (8, 'Iron Ingot', 8);
INSERT INTO `recipes` VALUES (9, 'White Wool', 1);
INSERT INTO `recipes` VALUES (9, 'String', 2);
INSERT INTO `recipes` VALUES (10, 'White Wool', 1);
INSERT INTO `recipes` VALUES (10, 'String', 3);
INSERT INTO `recipes` VALUES (11, 'Stick', 3);
INSERT INTO `recipes` VALUES (11, 'Iron Ingot', 2);
INSERT INTO `recipes` VALUES (12, 'Sugar', 1);
INSERT INTO `recipes` VALUES (12, 'Red Mushroom', 1);
INSERT INTO `recipes` VALUES (12, 'Apple', 1);
INSERT INTO `recipes` VALUES (12, 'Tin Dust', 8);
INSERT INTO `recipes` VALUES (13, 'Glass Bottle', 1);
INSERT INTO `recipes` VALUES (13, 'Sugar', 1);
INSERT INTO `recipes` VALUES (13, 'Milk Bucket', 1);
INSERT INTO `recipes` VALUES (13, 'Red Mushroom', 1);
INSERT INTO `recipes` VALUES (13, 'Apple', 1);
INSERT INTO `recipes` VALUES (13, 'Tin Dust', 8);
INSERT INTO `recipes` VALUES (14, 'Chest', 1);
INSERT INTO `recipes` VALUES (14, 'Gold Dust', 4);
INSERT INTO `recipes` VALUES (14, 'Leather', 5);
INSERT INTO `recipes` VALUES (15, 'Chest', 1);
INSERT INTO `recipes` VALUES (15, 'Leather', 10);
INSERT INTO `recipes` VALUES (15, 'Gold Dust', 12);
INSERT INTO `recipes` VALUES (16, 'Chest', 1);
INSERT INTO `recipes` VALUES (16, 'Leather', 15);
INSERT INTO `recipes` VALUES (16, 'Gold Dust', 24);
INSERT INTO `recipes` VALUES (17, 'Gold Dust', 38);
INSERT INTO `recipes` VALUES (17, 'White Wool', 1);
INSERT INTO `recipes` VALUES (17, 'Leather', 15);
INSERT INTO `recipes` VALUES (17, 'Chest', 1);
INSERT INTO `recipes` VALUES (18, 'Chest', 1);
INSERT INTO `recipes` VALUES (18, 'White Wool', 1);
INSERT INTO `recipes` VALUES (18, 'Leather', 17);
INSERT INTO `recipes` VALUES (18, 'Gold Dust', 78);
INSERT INTO `recipes` VALUES (19, 'Chest', 1);
INSERT INTO `recipes` VALUES (19, 'White Wool', 1);
INSERT INTO `recipes` VALUES (19, 'Leather', 19);
INSERT INTO `recipes` VALUES (19, 'Gold Dust', 122);
INSERT INTO `recipes` VALUES (20, 'Redstone Dust', 1);
INSERT INTO `recipes` VALUES (20, 'White Wool', 1);
INSERT INTO `recipes` VALUES (20, 'Zinc Dust', 2);
INSERT INTO `recipes` VALUES (20, 'Netherrack', 32);
INSERT INTO `recipes` VALUES (20, 'Iron Ingot', 4);
INSERT INTO `recipes` VALUES (20, 'Ice', 6);
INSERT INTO `recipes` VALUES (20, 'Iron Dust', 7);
INSERT INTO `recipes` VALUES (20, 'Aluminum Dust', 8);
INSERT INTO `recipes` VALUES (20, 'Copper Dust', 11);
INSERT INTO `recipes` VALUES (21, 'Iron Dust', 1);
INSERT INTO `recipes` VALUES (21, 'String', 1);
INSERT INTO `recipes` VALUES (21, 'Silicon', 3);
INSERT INTO `recipes` VALUES (21, 'Yellow Dye', 4);
INSERT INTO `recipes` VALUES (21, 'Gold Dust', 11);
INSERT INTO `recipes` VALUES (22, 'Bowl', 1);
INSERT INTO `recipes` VALUES (22, 'Stone', 5);
INSERT INTO `recipes` VALUES (23, 'Bowl', 1);
INSERT INTO `recipes` VALUES (23, 'Stone', 5);
INSERT INTO `recipes` VALUES (23, 'Nether Brick', 5);
INSERT INTO `recipes` VALUES (24, 'Iron Ingot', 6);
INSERT INTO `recipes` VALUES (24, 'Iron Dust', 6);
INSERT INTO `recipes` VALUES (24, 'Coal', 48);
INSERT INTO `recipes` VALUES (25, 'Flint And Steel', 1);
INSERT INTO `recipes` VALUES (25, 'Iron Ingot', 2);
INSERT INTO `recipes` VALUES (25, 'Iron Dust', 2);
INSERT INTO `recipes` VALUES (25, 'Silicon', 2);
INSERT INTO `recipes` VALUES (25, 'Dirt', 2);
INSERT INTO `recipes` VALUES (25, 'Obsidian', 3);
INSERT INTO `recipes` VALUES (25, 'Stone', 6);
INSERT INTO `recipes` VALUES (25, 'Nether Wart', 13);
INSERT INTO `recipes` VALUES (25, 'Blaze Powder', 17);
INSERT INTO `recipes` VALUES (25, 'Gunpowder', 4);
INSERT INTO `recipes` VALUES (25, 'Coal', 4);
INSERT INTO `recipes` VALUES (26, 'Glass', 1);
INSERT INTO `recipes` VALUES (26, 'Lapis Lazuli', 1);
INSERT INTO `recipes` VALUES (26, 'Flint', 2);
INSERT INTO `recipes` VALUES (26, 'Iron Dust', 2);
INSERT INTO `recipes` VALUES (26, 'Glass Pane', 2);
INSERT INTO `recipes` VALUES (26, 'Aluminum Dust', 4);
INSERT INTO `recipes` VALUES (26, 'Gold Dust', 22);
INSERT INTO `recipes` VALUES (26, 'Coal', 512);
INSERT INTO `recipes` VALUES (27, 'Silicon', 2);
INSERT INTO `recipes` VALUES (27, 'Tin Dust', 3);
INSERT INTO `recipes` VALUES (27, 'Iron Dust', 8);
INSERT INTO `recipes` VALUES (27, 'Iron Ingot', 8);
INSERT INTO `recipes` VALUES (27, 'Copper Dust', 9);
INSERT INTO `recipes` VALUES (27, 'Aluminum Dust', 12);
INSERT INTO `recipes` VALUES (27, 'Coal', 144);
INSERT INTO `recipes` VALUES (28, 'Flint', 1);
INSERT INTO `recipes` VALUES (28, 'TNT', 2);
INSERT INTO `recipes` VALUES (28, 'Iron Ingot', 2);
INSERT INTO `recipes` VALUES (28, 'Iron Dust', 2);
INSERT INTO `recipes` VALUES (28, 'Silicon', 2);
INSERT INTO `recipes` VALUES (28, 'Coal', 256);
INSERT INTO `recipes` VALUES (29, 'Flint', 1);
INSERT INTO `recipes` VALUES (29, 'Iron Ingot', 2);
INSERT INTO `recipes` VALUES (29, 'Iron Dust', 2);
INSERT INTO `recipes` VALUES (29, 'Silicon', 2);
INSERT INTO `recipes` VALUES (29, 'Compass', 2);
INSERT INTO `recipes` VALUES (29, 'Coal', 256);
INSERT INTO `recipes` VALUES (30, 'Iron Ingot', 5);
INSERT INTO `recipes` VALUES (30, 'Iron Dust', 8);
INSERT INTO `recipes` VALUES (30, 'Copper Dust', 8);
INSERT INTO `recipes` VALUES (31, 'Flint', 1);
INSERT INTO `recipes` VALUES (31, 'Iron Dust', 2);
INSERT INTO `recipes` VALUES (31, 'Emerald Ore', 2);
INSERT INTO `recipes` VALUES (31, 'Gold Dust', 22);
INSERT INTO `recipes` VALUES (31, 'Coal', 256);
INSERT INTO `recipes` VALUES (32, 'Tin Dust', 1);
INSERT INTO `recipes` VALUES (32, 'Stick', 2);
INSERT INTO `recipes` VALUES (32, 'Copper Dust', 3);
INSERT INTO `recipes` VALUES (32, 'Iron Ingot', 4);
INSERT INTO `recipes` VALUES (32, 'Iron Dust', 4);
INSERT INTO `recipes` VALUES (32, 'Aluminum Dust', 4);
INSERT INTO `recipes` VALUES (32, 'Coal', 64);
INSERT INTO `recipes` VALUES (33, 'Lead Dust', 2);
INSERT INTO `recipes` VALUES (33, 'Silver Dust', 3);
INSERT INTO `recipes` VALUES (33, 'Tin Dust', 3);
INSERT INTO `recipes` VALUES (33, 'Aluminum Dust', 4);
INSERT INTO `recipes` VALUES (33, 'Iron Ingot', 4);
INSERT INTO `recipes` VALUES (33, 'Iron Dust', 4);
INSERT INTO `recipes` VALUES (33, 'Copper Dust', 7);
INSERT INTO `recipes` VALUES (33, 'Coal', 64);
INSERT INTO `recipes` VALUES (33, 'Gold Dust', 12);
INSERT INTO `recipes` VALUES (34, 'Tin Dust', 1);
INSERT INTO `recipes` VALUES (34, 'Iron Ingot', 2);
INSERT INTO `recipes` VALUES (34, 'Iron Dust', 2);
INSERT INTO `recipes` VALUES (34, 'Copper Dust', 3);
INSERT INTO `recipes` VALUES (34, 'Aluminum Dust', 4);
INSERT INTO `recipes` VALUES (34, 'Coal', 48);
INSERT INTO `recipes` VALUES (35, 'Iron Ingot', 2);
INSERT INTO `recipes` VALUES (35, 'Iron Dust', 2);
INSERT INTO `recipes` VALUES (35, 'Coal', 16);
INSERT INTO `recipes` VALUES (36, 'Iron Ingot', 1);
INSERT INTO `recipes` VALUES (36, 'Iron Dust', 1);
INSERT INTO `recipes` VALUES (36, 'Coal', 6);
INSERT INTO `recipes` VALUES (37, 'Tin Dust', 1);
INSERT INTO `recipes` VALUES (37, 'Copper Dust', 2);
INSERT INTO `recipes` VALUES (38, 'Copper Dust', 1);
INSERT INTO `recipes` VALUES (38, 'Aluminum Dust', 2);
INSERT INTO `recipes` VALUES (39, 'Copper Dust', 1);
INSERT INTO `recipes` VALUES (39, 'Silver Dust', 2);
INSERT INTO `recipes` VALUES (40, 'Zinc Dust', 1);
INSERT INTO `recipes` VALUES (40, 'Copper Dust', 2);
INSERT INTO `recipes` VALUES (41, 'Zinc Dust', 1);
INSERT INTO `recipes` VALUES (41, 'Copper Dust', 2);
INSERT INTO `recipes` VALUES (41, 'Aluminum Dust', 2);
INSERT INTO `recipes` VALUES (42, 'Tin Dust', 1);
INSERT INTO `recipes` VALUES (42, 'Copper Dust', 2);
INSERT INTO `recipes` VALUES (42, 'Aluminum Dust', 2);
INSERT INTO `recipes` VALUES (43, 'Tin Dust', 1);
INSERT INTO `recipes` VALUES (43, 'Lead Dust', 2);
INSERT INTO `recipes` VALUES (44, 'Glass', 1);
INSERT INTO `recipes` VALUES (44, 'Lapis Lazuli', 1);
INSERT INTO `recipes` VALUES (44, 'Glass Pane', 1);
INSERT INTO `recipes` VALUES (44, 'Aluminum Dust', 2);
INSERT INTO `recipes` VALUES (45, 'Flint', 1);
INSERT INTO `recipes` VALUES (45, 'Coal', 256);
INSERT INTO `recipes` VALUES (46, 'Glass Pane', 1);
INSERT INTO `recipes` VALUES (46, 'Flint', 2);
INSERT INTO `recipes` VALUES (46, 'Coal', 512);
INSERT INTO `recipes` VALUES (47, 'Iron Ingot', 1);
INSERT INTO `recipes` VALUES (47, 'Iron Dust', 1);
INSERT INTO `recipes` VALUES (47, 'Copper Dust', 1);
INSERT INTO `recipes` VALUES (48, 'Iron Dust', 2);
INSERT INTO `recipes` VALUES (48, 'Iron Ingot', 1);
INSERT INTO `recipes` VALUES (48, 'Copper Dust', 2);
INSERT INTO `recipes` VALUES (49, 'Glass Pane', 1);
INSERT INTO `recipes` VALUES (49, 'Flint', 2);
INSERT INTO `recipes` VALUES (49, 'Coal', 512);
INSERT INTO `recipes` VALUES (50, 'Iron Ingot', 1);
INSERT INTO `recipes` VALUES (50, 'Iron Dust', 1);
INSERT INTO `recipes` VALUES (50, 'Silicon', 1);
INSERT INTO `recipes` VALUES (51, 'Netherrack', 16);
INSERT INTO `recipes` VALUES (52, 'Coal', 8);
INSERT INTO `recipes` VALUES (53, 'Coal', 32);
INSERT INTO `recipes` VALUES (54, 'Coal', 256);
INSERT INTO `recipes` VALUES (54, 'Flint', 1);
INSERT INTO `recipes` VALUES (55, 'Gold Dust', 11);
INSERT INTO `recipes` VALUES (56, 'Gold Dust', 10);
INSERT INTO `recipes` VALUES (57, 'Gold Dust', 9);
INSERT INTO `recipes` VALUES (58, 'Gold Dust', 8);
INSERT INTO `recipes` VALUES (59, 'Gold Dust', 7);
INSERT INTO `recipes` VALUES (60, 'Gold Dust', 6);
INSERT INTO `recipes` VALUES (61, 'Gold Dust', 5);
INSERT INTO `recipes` VALUES (62, 'Gold Dust', 4);
INSERT INTO `recipes` VALUES (63, 'Gold Dust', 3);
INSERT INTO `recipes` VALUES (64, 'Gold Dust', 2);
INSERT INTO `recipes` VALUES (65, 'Gold Dust', 1);
INSERT INTO `recipes` VALUES (66, 'Block Of Quartz', 1);
INSERT INTO `recipes` VALUES (67, 'Iron Dust', 1);
INSERT INTO `recipes` VALUES (67, 'Gold Dust', 11);
INSERT INTO `recipes` VALUES (68, 'Glass', 1);
INSERT INTO `recipes` VALUES (68, 'Lapis Lazuli', 1);
INSERT INTO `recipes` VALUES (68, 'Glass Pane', 2);
INSERT INTO `recipes` VALUES (68, 'Aluminum Dust', 4);
INSERT INTO `recipes` VALUES (69, 'Sifted Ore', 36);
INSERT INTO `recipes` VALUES (70, 'Silicon', 1);
INSERT INTO `recipes` VALUES (70, 'Block Of Redstone', 1);
INSERT INTO `recipes` VALUES (70, 'Tin Dust', 1);
INSERT INTO `recipes` VALUES (70, 'Redstone Dust', 1);
INSERT INTO `recipes` VALUES (70, 'Iron Ingot', 3);
INSERT INTO `recipes` VALUES (70, 'Iron Dust', 3);
INSERT INTO `recipes` VALUES (70, 'Copper Dust', 3);
INSERT INTO `recipes` VALUES (70, 'Aluminum Dust', 4);
INSERT INTO `recipes` VALUES (70, 'Coal', 48);
INSERT INTO `recipes` VALUES (71, 'Magnesium', 1);
INSERT INTO `recipes` VALUES (71, 'Sand', 2);
INSERT INTO `recipes` VALUES (72, 'Gold Dust', 11);
INSERT INTO `recipes` VALUES (72, 'Sifted Ore', 36);
INSERT INTO `recipes` VALUES (73, 'Glass Pane', 1);
INSERT INTO `recipes` VALUES (73, 'Flint', 2);
INSERT INTO `recipes` VALUES (73, 'Gold Dust', 11);
INSERT INTO `recipes` VALUES (73, 'Sifted Ore', 36);
INSERT INTO `recipes` VALUES (73, 'Coal', 512);
INSERT INTO `recipes` VALUES (74, 'Nether Star', 1);
INSERT INTO `recipes` VALUES (74, 'Glass Pane', 1);
INSERT INTO `recipes` VALUES (74, 'Flint', 2);
INSERT INTO `recipes` VALUES (74, 'Gold Dust', 11);
INSERT INTO `recipes` VALUES (74, 'Sifted Ore', 36);
INSERT INTO `recipes` VALUES (74, 'Coal', 512);
INSERT INTO `recipes` VALUES (75, 'Nether Ice', 1);
INSERT INTO `recipes` VALUES (75, 'Sifted Ore', 36);
INSERT INTO `recipes` VALUES (76, 'Sifted Ore', 36);
INSERT INTO `recipes` VALUES (77, 'Sifted Ore', 36);
INSERT INTO `recipes` VALUES (78, 'Sifted Ore', 72);
INSERT INTO `recipes` VALUES (79, 'Bucket', 1);
INSERT INTO `recipes` VALUES (80, 'Bucket', 1);
INSERT INTO `recipes` VALUES (81, 'Nether Wart', 1);
INSERT INTO `recipes` VALUES (82, 'Nether Wart', 2);
INSERT INTO `recipes` VALUES (83, 'Nether Wart', 8);
INSERT INTO `recipes` VALUES (84, 'Eye Of Ender', 1);
INSERT INTO `recipes` VALUES (85, 'Eye Of Ender', 2);
INSERT INTO `recipes` VALUES (86, 'Eye Of Ender', 8);
INSERT INTO `recipes` VALUES (87, 'Book', 1);
INSERT INTO `recipes` VALUES (87, 'Nether Wart', 8);
INSERT INTO `recipes` VALUES (88, 'Gold Dust', 1);
INSERT INTO `recipes` VALUES (88, 'Glass Pane', 1);
INSERT INTO `recipes` VALUES (88, 'Nether Wart', 8);
INSERT INTO `recipes` VALUES (88, 'Flask Of Knowledge', 3);
INSERT INTO `recipes` VALUES (89, 'Flint And Steel', 1);
INSERT INTO `recipes` VALUES (89, 'Dirt', 2);
INSERT INTO `recipes` VALUES (89, 'Obsidian', 3);
INSERT INTO `recipes` VALUES (89, 'Stone', 6);
INSERT INTO `recipes` VALUES (89, 'Nether Wart', 9);
INSERT INTO `recipes` VALUES (89, 'Gunpowder', 4);
INSERT INTO `recipes` VALUES (89, 'Coal', 4);
INSERT INTO `recipes` VALUES (89, 'Fire Charge', 4);
INSERT INTO `recipes` VALUES (90, 'Emerald', 1);
INSERT INTO `recipes` VALUES (90, 'Gold Dust', 6);
INSERT INTO `recipes` VALUES (90, 'Nether Wart', 8);
INSERT INTO `recipes` VALUES (91, 'Wither Skeleton Skull', 1);
INSERT INTO `recipes` VALUES (91, 'Nether Wart', 32);
INSERT INTO `recipes` VALUES (92, 'Raw Salmon', 1);
INSERT INTO `recipes` VALUES (92, 'Blaze Powder', 1);
INSERT INTO `recipes` VALUES (92, 'Flint And Steel', 1);
INSERT INTO `recipes` VALUES (92, 'Wither Skeleton Skull', 1);
INSERT INTO `recipes` VALUES (92, 'Raw Cod', 1);
INSERT INTO `recipes` VALUES (92, 'Dirt', 2);
INSERT INTO `recipes` VALUES (92, 'Ghast Tear', 2);
INSERT INTO `recipes` VALUES (92, 'Water Bucket', 2);
INSERT INTO `recipes` VALUES (92, 'Sand', 2);
INSERT INTO `recipes` VALUES (92, 'Feather', 4);
INSERT INTO `recipes` VALUES (92, 'Fire Charge', 4);
INSERT INTO `recipes` VALUES (92, 'Obsidian', 5);
INSERT INTO `recipes` VALUES (92, 'Stone', 14);
INSERT INTO `recipes` VALUES (92, 'Eye Of Ender', 32);
INSERT INTO `recipes` VALUES (92, 'Nether Wart', 48);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'nauvalsm@gmail.com', 'MrPolo', '$2y$10$fTfm5qPJqOjrNxYj4vFbmeqgilp7Aq8eS1aJrnszstV9holjWtxt6');
INSERT INTO `user` VALUES (3, 'yolanda.anzita@gmail.com', 'whotao', '$2y$10$iaVFa1J47/WlDAFKiu1UOOWAOwvGw2OMxaSSFkA0X1hulBlq7FxbG');
INSERT INTO `user` VALUES (4, 'nauvalms@gmail.com', 'asdasd', '$2y$10$IxYr/Sd34Nu6.N8BpQVeE.6WgxU4XKbClGJ8bVt1E.wr/OUE7dZXG');

SET FOREIGN_KEY_CHECKS = 1;
