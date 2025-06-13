# local_genaipatch

Ein kleines Moodle-Plugin, das eine spezifische Checkbox (`coursecontents`) aus dem Formular des Plugins `qbank_genai` entfernt.

## 🔍 Zweck

Dieses Plugin nutzt einen Core-Hook (`output/before_http_headers`), um benutzerdefiniertes JavaScript auf Seiten mit `qbank_genai`-Formularen einzubinden.
Das JavaScript entfernt die Checkbox `coursecontents`, die im Originalformular definiert ist über:

```php
$mform->addElement('checkbox', 'coursecontents', get_string('use_coursecontents', 'qbank_genai'));
