with Ada.Containers; use Ada.Containers;
 with Ada.Containers.Vectors;

 with Ada.Text_IO; use Ada.Text_IO;

 procedure Show_Vector_Init is

 package Integer_Vectors is new
 Ada.Containers.Vectors
 (Index_Type => Natural,
 Element_Type => Integer);
 use Integer_Vectors;
 V : Vector := 20 & 10 & 0 & 13;
 begin
 Put_Line ("Vector has "
 & Count_Type'Image (V.Length)
 & " elements");
 end Show_Vector_Init;
