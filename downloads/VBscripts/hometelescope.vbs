'Home Telescope example:

On Error Resume Next
Dim Telescope
Set Telescope = CreateObject("ASCOM.GeminiTelescope.Telescope") 
Telescope.Connected = True
Telescope.AThome
Set Telescope = nothing
WScript.Quit
