# Projektbeschreibung: KVMDash
KVMDash ist eine moderne Webanwendung, die die effiziente Verwaltung von Virtual Machines (VMs) und Linux-Containern (LXC) auf Linux-Systemen ermöglicht. Mit einer benutzerfreundlichen Oberfläche erleichtert KVMDash die Administration und Überwachung von Virtualisierungsumgebungen.

```
+-------------------------+         
|       Frontend:         |         
|  HTML, CSS, JavaScript, |       
+-------------------------+        
            ^
            |
            |
            v
+-----------------------+
|        Backend:       |
|      API-Service      | 
|     mit PHP und       |
|  Libvirt-Integration  |
+-----------------------+                
           |
           |
           v
   +-----------------+
   |     libvirt:    |
   |  Zugriff über   |
   | libvirt-Socket  |
   +-----------------+

```


## Features

### VM- und LXC-Verwaltung
* Erstellen, Löschen und Konfigurieren von VMs und Containern über die Weboberfläche.
* Nutzung von Vorlagen für die schnelle und standardisierte Erstellung von VMs und Containern.

### Systemmonitoring
* Echtzeitüberwachung von Ressourcen wie CPU, Arbeitsspeicher, Festplattenauslastung und weiteren wichtigen Systemmetriken.
* Übersichtliche Darstellung der Systemleistung für eine optimale Kontrolle und Fehleranalyse.

### Benutzer-Authentifizierung
* Sichere Login-Mechanismen zum Schutz vor unberechtigtem Zugriff.


## Voraussetzung
Ein Linux-System mit:

* Installiertem KVM (Kernel-based Virtual Machine).
* Installiertem libvirt für die Verwaltung von Virtualisierungsressourcen

Eine detaillierte Anleitung zur Installation von KVM unter Debian 12 (Bookworm) finden Sie hier: 
[Installation von KVM unter Debian 12 Bookworm](https://themm.curiosum.eu/howto/installation-von-kvm-unter-debian-12-bookworm)

## Zielgruppe 
KVMDash richtet sich an Systemadministratoren, DevOps-Ingenieure und technische Anwender, die eine zentrale Plattform zur Verwaltung und Überwachung von VMs und Containern auf Linux-Systemen benötigen.

## Ziel
Das Hauptziel von KVMDash ist es, die Komplexität bei der Administration von Virtualisierungsumgebungen zu verringern. Dabei werden leistungsstarke Verwaltungs- und Überwachungsfunktionen bereitgestellt, die gleichzeitig leicht zugänglich und intuitiv bedienbar sind.


