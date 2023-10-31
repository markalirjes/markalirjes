seg1 segment
    x DW 20
    y DW 50
    i DW ?
seg1 ends
myseg segment stack
    dw 100 dup(0)
myseg ends
seg2 segment
        L: Assume CS:Seg2 , DS:Seg1
        
        mov ah,4CH
        int 21H
Seg2 ends
End L