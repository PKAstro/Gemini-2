'Unpark Telescope example:

On Error Resume Next
Dim Telescope
Set Telescope = CreateObject("ASCOM.GeminiTelescope.Telescope") 
Telescope.Connected = True
Telescope.UnPark
Set Telescope = nothing
WScript.Quit
