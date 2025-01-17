<?php

namespace Zerlix\KvmDash\Api\Controller\Host;

use Zerlix\KvmDash\Api\Controller\CommandController;

class HostCpuController extends CommandController
{
    public function handle(string $route, string $method): array
    {
        $output = $this->executeCommand(['lscpu']);
        $outputString = implode("\n", array_map('trim', $output));

        // format the output
        $formattedOutput = [];
        if (preg_match_all('/(.+):\s+(.*)/', $outputString, $matches)) {
            foreach ($matches[1] as $index => $key) {
                $formattedOutput[$key] = $matches[2][$index];
            }
            return ['status' => 'success', 'data' => $formattedOutput];
        } else {
            return ['status' => 'error', 'message' => 'Unable to parse cpu details output'];
        }
    }
}
