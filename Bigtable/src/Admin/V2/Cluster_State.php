<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2;

/**
 * Possible states of a cluster.
 *
 * Protobuf enum <code>Google\Bigtable\Admin\V2\Cluster\State</code>
 */
class Cluster_State
{
    /**
     * The state of the cluster could not be determined.
     *
     * Generated from protobuf enum <code>STATE_NOT_KNOWN = 0;</code>
     */
    const STATE_NOT_KNOWN = 0;
    /**
     * The cluster has been successfully created and is ready to serve requests.
     *
     * Generated from protobuf enum <code>READY = 1;</code>
     */
    const READY = 1;
    /**
     * The cluster is currently being created, and may be destroyed
     * if the creation process encounters an error.
     * A cluster may not be able to serve requests while being created.
     *
     * Generated from protobuf enum <code>CREATING = 2;</code>
     */
    const CREATING = 2;
    /**
     * The cluster is currently being resized, and may revert to its previous
     * node count if the process encounters an error.
     * A cluster is still capable of serving requests while being resized,
     * but may exhibit performance as if its number of allocated nodes is
     * between the starting and requested states.
     *
     * Generated from protobuf enum <code>RESIZING = 3;</code>
     */
    const RESIZING = 3;
    /**
     * The cluster has no backing nodes. The data (tables) still
     * exist, but no operations can be performed on the cluster.
     *
     * Generated from protobuf enum <code>DISABLED = 4;</code>
     */
    const DISABLED = 4;
}
