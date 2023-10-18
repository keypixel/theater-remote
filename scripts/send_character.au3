; Check if a command line argument (the character) is provided
If $CmdLine[0] = 1 Then
    $character = $CmdLine[1]

    If $character = "shutdown" Then
        ; Run a system shutdown command
        Shutdown(1) ; 1 stands for a complete system shutdown
    ElseIf $character = "restart" Then
        ; Run a system restart command
        Shutdown(2) ; 2 stands for a system restart
    Else
        ; Send the character
        Send($character)
        
        ; debug
        ; FileWriteLine("C:\xampp\htdocs\theater-remote\scripts\logs\send.character.au3.log", "Debug: Received character - " & $character & @CRLF)
    EndIf
Else
    ; MsgBox(0, "Error", "No character provided.")
EndIf
