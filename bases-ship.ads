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

-- ****h* Bases/Ship
-- FUNCTION
-- Provides code to manipulate player ship in sky bases
-- SOURCE
package Bases.Ship is
-- ****

   -- ****e* Ship/Ship.Bases_Ship_Nothing_To_Repair
   -- FUNCTION
   -- Raised when there is nothing to repair
   -- SOURCE
   Bases_Ship_Nothing_To_Repair: exception;
   -- ****

   -- ****e* Ship/Ship.Bases_Ship_Unique_Module
   -- FUNCTION
   -- Raised when player try install another same unique module
   -- SOURCE
   Bases_Ship_Unique_Module: exception;
   -- ****

   -- ****e* Ship/Ship.Bases_Ship_Installation_Error
   -- FUNCTION
   -- Raised when problems with installing ship module occurs
   -- SOURCE
   Bases_Ship_Installation_Error: exception;
   -- ****

   -- ****e* Ship/Ship.Bases_Ship_Removing_Error
   -- FUNCTION
   -- Raised when problems with removing ship module occurs
   -- SOURCE
   Bases_Ship_Removing_Error: exception;
   -- ****

   -- ****f* Ship/Ship.Repair_Ship
   -- FUNCTION
   -- Repairs player ship in bases
   -- PARAMETERS
   -- Module_Index - Index of player ship module to repair or 0 to repair whole
   --                ship
   -- SOURCE
   procedure Repair_Ship(Module_Index: Integer) with
      Pre => Module_Index <= Player_Ship.Modules.Last_Index;
      -- ****

      -- ****f* Ship/Ship.Upgrade_Ship
      -- FUNCTION
      -- Install or remove modules on player ship
      -- PARAMETERS
      -- Install      - If True, perform module installation on player ship. On
      --                False, remove module
      -- Module_Index - Index of prototype module to install or remove
      -- SOURCE
   procedure Upgrade_Ship(Install: Boolean; Module_Index: Positive) with
      Pre => Module_Index in
        Player_Ship.Modules.First_Index .. Player_Ship.Modules.Last_Index;
      -- ****

      -- ****f* Ship/Ship.Pay_For_Dock
      -- FUNCTION
      -- Pay daily fee for docking
      -- SOURCE
   procedure Pay_For_Dock;
   -- ****

   -- ****f* Ship/Ship.Repair_Cost
   -- FUNCTION
   -- Count cost and time of repairs of player ship
   -- PARAMETERS
   -- Cost         - Overall cost of repair of player ship
   -- Time         - Time needed for repair of player ship
   -- Module_Index - Index of module on player ship to repair or 0 to repair
   --                all damage modules, -1 for fast repair all ship and -2
   --                for very fast repair all ship
   -- RESULT
   -- Parameters Cost and Time
   -- SOURCE
   procedure Repair_Cost
     (Cost, Time: in out Natural; Module_Index: Integer) with
      Pre => Module_Index in -2 .. Player_Ship.Modules.Last_Index,
      Post => Cost > 0 and Time > 0,
      Import => True,
      Convention => C,
      External_Name => "repairAdaCost";
      -- ****

end Bases.Ship;
