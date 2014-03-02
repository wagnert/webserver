<?php
/**
 * \TechDivision\WebServer\Interfaces\ConnectionHandlerInterface
 *
 * PHP version 5
 *
 * @category   Library
 * @package    TechDivision_WebServer
 * @subpackage Interfaces
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_WebServer
 */

namespace TechDivision\WebServer\Interfaces;

use TechDivision\WebServer\Sockets\SocketInterface;

/**
 * Class ConnectionHandlerInterface
 *
 * @category   Library
 * @package    TechDivision_WebServer
 * @subpackage Interfaces
 * @author     Johann Zelger <jz@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/techdivision/TechDivision_WebServer
 */
interface ConnectionHandlerInterface
{

    /**
     * Inits the connection handler
     *
     * @param \TechDivision\WebServer\Interfaces\ServerContextInterface $serverContext The server's context
     *
     * @return void
     */
    public function init(ServerContextInterface $serverContext);

    /**
     * Handles the connection with the connected client in a proper way the given
     * protocol type and version expects for example.
     *
     * @param \TechDivision\WebServer\Sockets\SocketInterface $connection The connection to handle
     *
     * @return bool Weather it was responsible to handle the firstLine or not.
     */
    public function handle(SocketInterface $connection);
}
