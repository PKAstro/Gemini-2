dim scope
Set Scope = CreateObject("ASCOM.GeminiTelescope.Telescope")
scope.connected = True
scope.CommandBlind">531:", False)
wscript.Sleep 1000
scope.connected = False
wscript.quit

