<?php

class block_yourblockname extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_yourblockname');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = $this->get_agenda_content();
        $this->content->footer = 'Block footer';

        return $this->content;
    }

    private function get_agenda_content() {
        // Hier kun je de logica toevoegen om de agenda-inhoud te genereren
        $agenda_content = 'Agenda content goes here';
        return $agenda_content;
    }
}
