https://github.com/proojekte/auto/wiki

***

Hinweis: Auf mehrfachen Wunsch beginnen wir mit der Konzeption nun doch zunächst in deutscher Sprache. Erst ab der ersten stabilen Version 1.0 wird dann die Dokumentation parallel in deutscher und englischer Sprache bereitgestellt.

# Einführung in Auto

Auto ist ein offenes und gut durchdachtes Automatisationssystem.

## Warum brauchen wir Automatisation?

Die Administration, Entwicklung und Nutzung von Technologien kann sehr komplex und aufwendig sein. Nicht selten ist sie sogar zu komplex und aufwendig, um alles auf die richtige Weise zu erledigen; insbesondere, wenn du gerade eigentlich etwas ganz anderes erreichen möchtest und nicht den Kopf frei hast, um dich mit deinem Werkzeug zu beschäftigen.

> Wenn auch du findest, dass es gerne einfacher und weniger aufwendig sein darf, mit Technolgie Dinge zu tun, ist Automatisation genau das richtige Thema für dich.

Reicht dir allerdings googeln und ausprobieren aus, wird dich Automatisation vermutlich nicht glücklicher machen.

## Warum also entwickeln wir Auto?

Wir brauchen und wollen etwas, dass uns das Administrieren, Entwickeln und Nutzen von Technologien vereinfacht; unabhängig davon, ob wir Windows, Mac OS X, iOS, GNU/Linux oder Android nutzen.

> Komplexität ist ein Hindernis; auch dann, wenn du ein Technologieexperte bist.

Auch Technologieexperten sind Menschen. Auch wir haben Leben, Partner, Kinder, Freunde und Kunden. Und auch unsere Gehirne haben eine begrenzte Kapazität. Vor diesem Hintergrund bevorzugen auch wir einfache Dinge, die direkt so funktionieren, wie es sein sollte.

Auf der anderen Seite lieben wir es auch, zu experimentieren; manchmal sogar, an der sogenannten blutigen Kante zu leben. Folglich brauchen wir Möglichkeiten, um abgesichert Dinge testen und Änderungen einfach und zuverlässig rückgängig machen zu können.

Super praktisch fänden wir es, wenn wir beispielsweise die mehr oder weniger komplexe Aktualisierung einer Software einfach protokollieren könnten, um dann die einzelnen Schritte auf allen Computern aller unserer Kunden automatisch zu wiederholen; natürlich ohne sich Sorgen machen zu müssen, dass dabei irgend etwas schief läuft.

Außerdem lieben wir einfach das Verbessern von Abläufen. Dinge zu gestalten, die direkt so funktionieren, wie es sein sollte, schafft Freu(n)de. ;-)

## Aber warum verwenden wir nicht bereits verfügbare Werkzeuge?

Nun. Natürlich bauen wir auf bereits verfügbaren Werkzeugen auf. Wir wollen gewiss nicht das Rad neu erfinden. Auch sind wir sehr dankbar für jede Lösung, die wir nicht selbst entwickeln müssen.

Aber ...

> Wenn etwas besser gelöst sein könnte, als es derzeit ist, dann wollen wir halt genau das haben.

Finden wir dann niemanden, der sich darum kümmert, machen wir es halt selbst.

Gepaart mit Neugier ist es genau das, was die Menschheit sich entwickeln lässt.

## Vision

Schon seit langem träumen wir von einer einheitlichen und zugleich organisch wachsende Schnittstelle zu jeder Technologie und Datenquelle auf jeder von uns genutzten Plattform.

Auf den ersten Blick mag dieses Ziel vielleicht noch sehr weit weg erscheinen. Jedoch hätte viel von dem, was in den letzten 10 Jahren passiert ist, sich damals auch kaum jemand vorstellen können.

Google. Amazon. Facebook. Apple. Netflix. Sie alle haben klein angefangen.

Also packen wir es an. Nutzen wir unser Wissen und unsere Superkräfte.

> Lasst uns ein Automatisationssystem aufbauen, das auf Basis gut durchdachter und bewährter Konventionen (fast) alles einfacher macht, ohne das Rad neu zu erfinden.

## Zusammenfassung

> Auto vereinfacht durch eine einheitliche und unterstützende Schnittstelle plattformübergreifend die Administration, Entwicklung und Nutzung von Technologien, und baut dabei auf gut durchdachten und bewährten Konventionen auf.

So hilft Auto dir, dich auf das Wesentliche zu konzentrieren und Dinge schnell und einfach auf die richtige Weise zu erledigen; auch, wenn du kein Experte in den Technologien bist, die Auto abdeckt. Denn du kannst beruhigt darauf vertrauen, dass Auto schon weiß, wie es richtig geht.

Okay. Genug Werbung über Auto. Lassen wir einfach mal Auto selbst zu Wort kommen.

## Interaktionsbeispiel

`Nutzer@Domäne@Gerät:~$` **`Auto`**

    Hallo Nutzer.

    Ich bin Auto; ein offenes und gut durchdachtes Automatisationssystem.

    Meine Internetadresse:

        https://proojekte.github.io/auto

    Mein Hauptverwendungsschema:

        Auto <Handlung> [<Ziel>] [wenn <Ereignis>]

    Was kann ich für dich tun?
    
    Beispiel:
    
        Auto liste Handlungen

`Nutzer@Domäne@Gerät:~$` **`Auto liste Handlungen`**

    Ich kann für dich Dinge aktualisieren, aufräumen, beenden, beginnen,
    beobachten, installieren, konfigurieren, kopieren, (auf)listen, löschen,
    pausieren, protokollieren, prüfen, sichern, signieren, starten,
    synchronisieren, vergleichen, verschlüsseln, wiederholen, ... und zeigen.

    Beispiel:

        Auto Sicherung

Wie du siehst, orientiert sich die Interaktion mit Auto an der natürlichen Sprache; so, als würdest du mit deinem persönlichen Technologieassistenten sprechen.

Dabei priorisieren wir Eindeutigkeit und Übertragbarkeit (derzeit zwischen den Sprachen Englisch und Deutsch) höher als Natürlichkeit. Beispielsweise beschreibt der erste Teil eines Kommandos immer die \<Handlung>.

Da die Schreibweise (Groß- und Kleinschreibung, Nomen oder Verbform) keine Auswirkung auf die Ausführung eines Kommandos hat, lassen sich dadurch einzelne Kommandos oder ganze Abläufe sehr natürlich beschreiben.

Damit sich vorgefertige Abläufe auch dann Einheitlich präsentieren, wenn diese von unterschiedlichen Personen erstellt wurden, formatiert Auto Ablaufbeschreibungen so weit wie möglich automatisch.

## Weiterführendes Interaktionsbeispiel

`Nutzer@Domäne@Gerät:~$` **`Auto Sicherung`**

    Soll ich deine Daten, Protokolle und Software in den folgenden Ort sichern?

    /Sicherungen/Domäne/Gerät/Nutzer/<Datum>/<Zeit>/

    Protokolle der einzelnen Schritte und dessen Ergebnisse findest du dann hier:

    /Protokolle/Domäne/Gerät/Nutzer/Auto/Sicherung/letzte/

    Ablauf:

        1. beginne    Ablauf
        2. kopiere    Nutzer
                      Sicherung:<Datum>/<Zeit>
        3. lösche                                               Sicherung:vorletzte
        4. verschiebe                          Sicherung:letzte Sicherung:vorletzte
        5. verknüpfe  Sicherung:<Datum>/<Zeit> Sicherung:letzte
        6. vergleiche                          Sicherung:letzte Sicherung:vorletzte
        7. signiere                            Sicherung:letzte
        8. beende     Ablauf

    Um diesen Ablauf ausführen zu lassen, wiederhole dein Kommando, oder schreibe:

        Auto ausführen

Wann immer es Auto sinnvoll erscheint, beschreibt es dir vorab, was es für dich wie zu erreichen versucht, bevor es etwas an deinen Daten oder deiner Software verändert.

So kannst du einfach ausprobieren, ob ein Kommando das bewirkt, was du dir wünschst.

Natürlich informiert dich Auto auch über den Fortschritt und Erfolg eines Ablaufs.

`Nutzer@Domäne@Gerät:~$` **`Auto ausführen`**

    Ich sichere nun deine Daten, Protokolle und Software in den folgenden Ort.

    /Sicherungen/Domäne/Gerät/Nutzer/2015-04-15/16-08-04/

    Protokolle der einzelnen Schritte und dessen Ergebnisse findest du dann hier:

    /Protokolle/Domäne/Gerät/Nutzer/Auto/Sicherung/letzte

        1. beginne Ablauf

    erledigt

        2. kopiere Nutzer Sicherung:2015-04-15/16-08-04

    erledigt

        3. lösche Sicherung:vorletzte

    erledigt

        4. verschiebe Sicherung:letzte Sicherung:vorletzte

    erledigt

        5. verknüpfe Sicherung:2015-04-15/16-03-09 Sicherung:letzte

    erledigt

        6. vergleiche Sicherung:letzte Sicherung:vorletzte

    erstellt:  4 Dateien
    gelöscht:  3 Dateien und 2 Verzeichnisse
    verändert: 1 Datei

        7. signiere Sicherung:letzte

    erledigt

        8. beende Ablauf

    fertig.

    Protokolle der einzelnen Schritte und dessen Ergebnisse findest du nun hier:

    /Protokolle/Domäne/Gerät/Nutzer/Auto/Sicherung/letzte/

    Tipp:

        Auto zeige Protokolle:letzte

## Auto tut nur, was auch du tun würdest

Auto erfindet nicht erneut das Rad. Letztlich führt es einfach nur Kommandos für dich aus; so, wie du es selbst machen würdest, wenn du genug Zeit hättest, um ein Experte jeder Technologie zu sein, die Auto für dich beherrscht.

`Nutzer@Domäne@Gerät:~$` **`Auto Synchronisation`**

    Soll ich deine Daten, Protokolle und Software mit deinem Nutzer auf
    server.domäne in beide Richtungen synchronisieren?

    Protokolle der einzelnen Schritte und dessen Ergebnisse findest du dann hier:

    /Protokolle/Domäne/Gerät/Nutzer/Auto/Synchronisation/letzte/

    Ablauf:

        1. beginne   Ablauf
        2. Sicherung Nutzer@Domäne@Server
                     im Hintergrund
        3. Sicherung
        4. ausführen "rsync -a -b -c -X -Y -Z -1 -2 -3 <uri 1> <uri 2>"
                     wenn 2
        5. Sicherung Nutzer@Domäne@Server
                     im Hintergrund
        6. Sicherung
        7. beende    Ablauf
                     wenn 5

    Um diesen Ablauf ausführen zu lassen, wiederhole dein Kommando, oder schreibe:

        Auto ausführen

Wie du siehst, macht Auto auch sehr komplexe Abläufe ganz einfach.

Zudem respektiert Auto Hersteller- und Softwarestandards; und natürlich auch deine Server- oder Gerätekonfiguration. Deshalb kannst du jederzeit damit beginnen oder aufhören, Auto zu verwenden.

Es ist allein von dir abhängig, ob du Auto beispielsweise nur für einen einzelnen Aspekt einer Technologie nutzen möchtest, oder für die Administration, Entwicklung und Nutzung sämtlicher Technologien.

## Auto sorgt für Sicherheit und Verlässlichkeit

Hast du das auch schon mal erlebt, dass ohne Not plötzlich etwas nicht mehr funktioniert?

Mit Auto hast du auf sehr einfache Weise die volle Kontrolle über die Sicherung und Rücksicherung deiner Daten, Protokolle und Software; plattformübergreifend und vollständig nachvollziehbar.

`Nutzer@Domäne@Gerät:~$` **`Auto rückgängig Aktualisierung Thunderbird`**

    Soll ich die Aktualisierung von Mozilla Thunderbird rückgängig machen?

    Protokolle der einzelnen Schritte und dessen Ergebnisse findest du dann hier:

    /Protokolle/Domäne/Gerät/Nutzer/Auto/rückgängig/Aktualisierung/
        Mozilla/Thunderbird/letzte/

    Mozilla Thunderbird wurde vor zwei Tagen automatisch von Version X auf Version
    Y aktualisiert.

    Die Aktualisierung hatte folgende Änderungen verursacht:

    1. a
    2. b
    3. c
    4. X
    5. Y
    6. Z

    Ablauf:

        1. beginne       Ablauf
        2. Sicherung
        3. Rücksicherung Sicherung:Aktualisierung/Mozilla/Thunderbird/vorletzte
        4. Sicherung
        5. beende        Ablauf

    Um diesen Ablauf ausführen zu lassen, wiederhole dein Kommando, oder schreibe:

        Auto ausführen

Ist das, was dir Auto vorschlägt für dich zu tun, nicht das, was du möchtest, brauchst du nichts weiter zu beachten.

Zudem fragt Auto der Sicherheit halber nochmal nach, wenn mehr als eine Minute vergangen ist, bevor du Auto geantwortet hast.

***

> Hach. Wäre es nicht schön, wenn das alles auch in der "echten Welt" funktionieren würde. ;-)

***

https://github.com/proojekte/auto/wiki
