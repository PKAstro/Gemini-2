dim scope
      Set Scope=CreateObject("ASCOM.GeminiTelescope.Telescope")
      scope.connected = False
      wscript.Sleep 2000
      scope.connected = True
      scope.CommandBlind">135:", False
      wscript.Sleep 2000
      scope.connected = False
      wscript.quit
