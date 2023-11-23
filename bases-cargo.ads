--    Copyright 2017-2023 Bartek thindil Jasicki
--
--    This file is part of Steam Sky.
--
--    Steam Sky is free software: you can redistribute it and/or modify
--    it under the terms of the GNU General Public License as published by
--    the Free Software Foundation, either version 3 of the License, or
--    (at your option) any later version.
--
--    Steam Sky is distributed in the hope that it will be useful,
--    but WITHOUT ANY WARRANTY; without even the implied warranty of
--    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
--    GNU General Public License for more details.
--
--    You should have received a copy of the GNU General Public License
--    along with Steam Sky.  If not, see <http://www.gnu.org/licenses/>.

-- ****h* Bases/BCargo
-- FUNCTION
-- Provide code for manipulate cargo of sky bases
-- SOURCE
package Bases.Cargo is
-- ****

   -- ****f* BCargo/BCargo.Generate_Cargo
   -- FUNCTION
   -- Generate base cargo
   -- SOURCE
   procedure Generate_Cargo;
   -- ****

   -- ****f* BCargo/BCargo.Update_Base_Cargo
   -- FUNCTION
   -- Update cargo in base
   -- PARAMETERS
   -- Proto_Index - Index of item prototype. Can be empty if Cargo_Index is set
   -- Amount      - Amount of item to add or remove
   -- Durability  - Durability of item to add or remove. Can be empty
   -- Cargo_Index - Index of item in sky base cargo. Can be empty if Proto_Index
   --               is set
   -- SOURCE
   procedure Update_Base_Cargo
     (Proto_Index: Natural := 0; Amount: Integer;
      Durability: Items_Durability := Default_Item_Durability;
      Cargo_Index: Inventory_Container.Extended_Index := 0);
   -- ****

   -- ****f* BCargo/BCargo.Find_Base_Cargo
   -- FUNCTION
   -- Find index of item in base cargo
   -- PARAMETERS
   -- Proto_Index - Index of prototype of item to search
   -- Durability  - Durability of item to search. Can be empty
   -- RESULT
   -- Index of item in sky base cargo or 0 if item not found
   -- SOURCE
   function Find_Base_Cargo
     (Proto_Index: Natural;
      Durability: Items_Durability := Items_Durability'Last)
      return Natural with
      Pre => Proto_Index > 0;
      -- ****

end Bases.Cargo;
