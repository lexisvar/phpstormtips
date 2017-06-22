/**
La posición del cursor puede estar dentro de bloque de código y al presionar Ctrl+Shift+M
el cursor irá al brazo correspondiente.

Brazos : {},[], () y  etiquetas de HTML.

Para Mac

Presione Ctrl+M
**/

<?php

trait Queueable
{
    /**
     * The name of the queue the job should be sent to.
     *
     * @var string
     */
    public $queue;

    /**
     * The seconds before the job should be made available.
     *
     * @var int
     */
    public $delay;

    /**
     * Set the desired queue for the job.
     *
     * @param  string  $queue
     * @return $this
     */
    public function onQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Set the desired delay for the job.
     *
     * @param  int  $delay
     * @return $this
     */
    public function delay($delay)
    {
        $this->delay = $delay;

        return $this;
    }
}
?>
<!-- Bloques HTML -->
<!DOCTYPE html>
<html>
    <body>

        <h1>My First Heading</h1>

        <p>My first paragraph.</p>
    </body>
</html>