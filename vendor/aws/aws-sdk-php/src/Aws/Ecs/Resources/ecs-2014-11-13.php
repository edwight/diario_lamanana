<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

return array (
    'apiVersion' => '2014-11-13',
    'endpointPrefix' => 'ecs',
    'serviceFullName' => 'Amazon EC2 Container Service',
    'serviceAbbreviation' => 'Amazon ECS',
    'serviceType' => 'json',
    'jsonVersion' => '1.1',
    'targetPrefix' => 'AmazonEC2ContainerServiceV20141113.',
    'signatureVersion' => 'v4',
    'namespace' => 'Ecs',
    'operations' => array(
        'CreateCluster' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateClusterResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.CreateCluster',
                ),
                'clusterName' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'CreateService' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'CreateServiceResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.CreateService',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'serviceName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
                'taskDefinition' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'loadBalancers' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'LoadBalancer',
                        'type' => 'object',
                        'properties' => array(
                            'loadBalancerName' => array(
                                'type' => 'string',
                            ),
                            'containerName' => array(
                                'type' => 'string',
                            ),
                            'containerPort' => array(
                                'type' => 'numeric',
                            ),
                        ),
                    ),
                ),
                'desiredCount' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'clientToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'role' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DeleteCluster' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteClusterResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DeleteCluster',
                ),
                'cluster' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DeleteService' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeleteServiceResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DeleteService',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'service' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DeregisterContainerInstance' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeregisterContainerInstanceResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DeregisterContainerInstance',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'containerInstance' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
                'force' => array(
                    'type' => 'boolean',
                    'format' => 'boolean-string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DeregisterTaskDefinition' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DeregisterTaskDefinitionResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DeregisterTaskDefinition',
                ),
                'taskDefinition' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DescribeClusters' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeClustersResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DescribeClusters',
                ),
                'clusters' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DescribeContainerInstances' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeContainerInstancesResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DescribeContainerInstances',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'containerInstances' => array(
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DescribeServices' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeServicesResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DescribeServices',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'services' => array(
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DescribeTaskDefinition' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTaskDefinitionResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DescribeTaskDefinition',
                ),
                'taskDefinition' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DescribeTasks' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DescribeTasksResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DescribeTasks',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'tasks' => array(
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'DiscoverPollEndpoint' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'DiscoverPollEndpointResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.DiscoverPollEndpoint',
                ),
                'containerInstance' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'ListClusters' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListClustersResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.ListClusters',
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'maxResults' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'ListContainerInstances' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListContainerInstancesResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.ListContainerInstances',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'maxResults' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'ListServices' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListServicesResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.ListServices',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'maxResults' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'ListTaskDefinitionFamilies' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTaskDefinitionFamiliesResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.ListTaskDefinitionFamilies',
                ),
                'familyPrefix' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'maxResults' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'ListTaskDefinitions' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTaskDefinitionsResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.ListTaskDefinitions',
                ),
                'familyPrefix' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'maxResults' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'ListTasks' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'ListTasksResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.ListTasks',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'containerInstance' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'family' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'maxResults' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'startedBy' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'serviceName' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'RegisterContainerInstance' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterContainerInstanceResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.RegisterContainerInstance',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'instanceIdentityDocument' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'instanceIdentityDocumentSignature' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'totalResources' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Resource',
                        'type' => 'object',
                        'properties' => array(
                            '' => array(
                            ),
                        ),
                    ),
                ),
                'versionInfo' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'agentVersion' => array(
                            'type' => 'string',
                        ),
                        'agentHash' => array(
                            'type' => 'string',
                        ),
                        'dockerVersion' => array(
                            'type' => 'string',
                        ),
                    ),
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'RegisterTaskDefinition' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RegisterTaskDefinitionResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.RegisterTaskDefinition',
                ),
                'family' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
                'containerDefinitions' => array(
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'ContainerDefinition',
                        'type' => 'object',
                        'properties' => array(
                            'name' => array(
                                'type' => 'string',
                            ),
                            'image' => array(
                                'type' => 'string',
                            ),
                            'cpu' => array(
                                'type' => 'numeric',
                            ),
                            'memory' => array(
                                'type' => 'numeric',
                            ),
                            'links' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'String',
                                    'type' => 'string',
                                ),
                            ),
                            'portMappings' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'PortMapping',
                                    'type' => 'object',
                                    'properties' => array(
                                        'containerPort' => array(
                                            'type' => 'numeric',
                                        ),
                                        'hostPort' => array(
                                            'type' => 'numeric',
                                        ),
                                    ),
                                ),
                            ),
                            'essential' => array(
                                'type' => 'boolean',
                                'format' => 'boolean-string',
                            ),
                            'entryPoint' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'String',
                                    'type' => 'string',
                                ),
                            ),
                            'command' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'String',
                                    'type' => 'string',
                                ),
                            ),
                            'environment' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'KeyValuePair',
                                    'type' => 'object',
                                    'properties' => array(
                                        'name' => array(
                                            'type' => 'string',
                                        ),
                                        'value' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                ),
                            ),
                            'mountPoints' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'MountPoint',
                                    'type' => 'object',
                                    'properties' => array(
                                        'sourceVolume' => array(
                                            'type' => 'string',
                                        ),
                                        'containerPath' => array(
                                            'type' => 'string',
                                        ),
                                        'readOnly' => array(
                                            'type' => 'boolean',
                                            'format' => 'boolean-string',
                                        ),
                                    ),
                                ),
                            ),
                            'volumesFrom' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'VolumeFrom',
                                    'type' => 'object',
                                    'properties' => array(
                                        'sourceContainer' => array(
                                            'type' => 'string',
                                        ),
                                        'readOnly' => array(
                                            'type' => 'boolean',
                                            'format' => 'boolean-string',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'volumes' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Volume',
                        'type' => 'object',
                        'properties' => array(
                            'name' => array(
                                'type' => 'string',
                            ),
                            'host' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'sourcePath' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'RunTask' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'RunTaskResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.RunTask',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'taskDefinition' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
                'overrides' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'containerOverrides' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'ContainerOverride',
                                'type' => 'object',
                                'properties' => array(
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'command' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'count' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'startedBy' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'StartTask' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'StartTaskResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.StartTask',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'taskDefinition' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
                'overrides' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'containerOverrides' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'ContainerOverride',
                                'type' => 'object',
                                'properties' => array(
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'command' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'containerInstances' => array(
                    'required' => true,
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
                'startedBy' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'StopTask' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'StopTaskResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.StopTask',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'task' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'SubmitContainerStateChange' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'SubmitContainerStateChangeResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.SubmitContainerStateChange',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'task' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'containerName' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'status' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'exitCode' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'reason' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'networkBindings' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'NetworkBinding',
                        'type' => 'object',
                        'properties' => array(
                            'bindIP' => array(
                                'type' => 'string',
                            ),
                            'containerPort' => array(
                                'type' => 'numeric',
                            ),
                            'hostPort' => array(
                                'type' => 'numeric',
                            ),
                        ),
                    ),
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'SubmitTaskStateChange' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'SubmitTaskStateChangeResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.SubmitTaskStateChange',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'task' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'status' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'reason' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
        'UpdateService' => array(
            'httpMethod' => 'POST',
            'uri' => '/',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'UpdateServiceResponse',
            'responseType' => 'model',
            'parameters' => array(
                'Content-Type' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'application/x-amz-json-1.1',
                ),
                'command.expects' => array(
                    'static' => true,
                    'default' => 'application/json',
                ),
                'X-Amz-Target' => array(
                    'static' => true,
                    'location' => 'header',
                    'default' => 'AmazonEC2ContainerServiceV20141113.UpdateService',
                ),
                'cluster' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'service' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'json',
                ),
                'desiredCount' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'taskDefinition' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'reason' => 'These errors are usually caused by a server-side issue.',
                    'class' => 'ServerException',
                ),
                array(
                    'reason' => 'These errors are usually caused by something the client did, such as use an action or resource on behalf of a user that doesn\'t have permission to use the action or resource, or specify an identifier that is not valid.',
                    'class' => 'ClientException',
                ),
            ),
        ),
    ),
    'models' => array(
        'CreateClusterResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'cluster' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'clusterArn' => array(
                            'type' => 'string',
                        ),
                        'clusterName' => array(
                            'type' => 'string',
                        ),
                        'status' => array(
                            'type' => 'string',
                        ),
                        'registeredContainerInstancesCount' => array(
                            'type' => 'numeric',
                        ),
                        'runningTasksCount' => array(
                            'type' => 'numeric',
                        ),
                        'pendingTasksCount' => array(
                            'type' => 'numeric',
                        ),
                    ),
                ),
            ),
        ),
        'CreateServiceResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'service' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'serviceArn' => array(
                            'type' => 'string',
                        ),
                        'serviceName' => array(
                            'type' => 'string',
                        ),
                        'clusterArn' => array(
                            'type' => 'string',
                        ),
                        'loadBalancers' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'LoadBalancer',
                                'type' => 'object',
                                'properties' => array(
                                    'loadBalancerName' => array(
                                        'type' => 'string',
                                    ),
                                    'containerName' => array(
                                        'type' => 'string',
                                    ),
                                    'containerPort' => array(
                                        'type' => 'numeric',
                                    ),
                                ),
                            ),
                        ),
                        'status' => array(
                            'type' => 'string',
                        ),
                        'desiredCount' => array(
                            'type' => 'numeric',
                        ),
                        'runningCount' => array(
                            'type' => 'numeric',
                        ),
                        'pendingCount' => array(
                            'type' => 'numeric',
                        ),
                        'taskDefinition' => array(
                            'type' => 'string',
                        ),
                        'deployments' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Deployment',
                                'type' => 'object',
                                'properties' => array(
                                    'id' => array(
                                        'type' => 'string',
                                    ),
                                    'status' => array(
                                        'type' => 'string',
                                    ),
                                    'taskDefinition' => array(
                                        'type' => 'string',
                                    ),
                                    'desiredCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'pendingCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'runningCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'createdAt' => array(
                                        'type' => 'string',
                                    ),
                                    'updatedAt' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'roleArn' => array(
                            'type' => 'string',
                        ),
                        'events' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'ServiceEvent',
                                'type' => 'object',
                                'properties' => array(
                                    'id' => array(
                                        'type' => 'string',
                                    ),
                                    'createdAt' => array(
                                        'type' => 'string',
                                    ),
                                    'message' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'DeleteClusterResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'cluster' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'clusterArn' => array(
                            'type' => 'string',
                        ),
                        'clusterName' => array(
                            'type' => 'string',
                        ),
                        'status' => array(
                            'type' => 'string',
                        ),
                        'registeredContainerInstancesCount' => array(
                            'type' => 'numeric',
                        ),
                        'runningTasksCount' => array(
                            'type' => 'numeric',
                        ),
                        'pendingTasksCount' => array(
                            'type' => 'numeric',
                        ),
                    ),
                ),
            ),
        ),
        'DeleteServiceResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'service' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'serviceArn' => array(
                            'type' => 'string',
                        ),
                        'serviceName' => array(
                            'type' => 'string',
                        ),
                        'clusterArn' => array(
                            'type' => 'string',
                        ),
                        'loadBalancers' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'LoadBalancer',
                                'type' => 'object',
                                'properties' => array(
                                    'loadBalancerName' => array(
                                        'type' => 'string',
                                    ),
                                    'containerName' => array(
                                        'type' => 'string',
                                    ),
                                    'containerPort' => array(
                                        'type' => 'numeric',
                                    ),
                                ),
                            ),
                        ),
                        'status' => array(
                            'type' => 'string',
                        ),
                        'desiredCount' => array(
                            'type' => 'numeric',
                        ),
                        'runningCount' => array(
                            'type' => 'numeric',
                        ),
                        'pendingCount' => array(
                            'type' => 'numeric',
                        ),
                        'taskDefinition' => array(
                            'type' => 'string',
                        ),
                        'deployments' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Deployment',
                                'type' => 'object',
                                'properties' => array(
                                    'id' => array(
                                        'type' => 'string',
                                    ),
                                    'status' => array(
                                        'type' => 'string',
                                    ),
                                    'taskDefinition' => array(
                                        'type' => 'string',
                                    ),
                                    'desiredCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'pendingCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'runningCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'createdAt' => array(
                                        'type' => 'string',
                                    ),
                                    'updatedAt' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'roleArn' => array(
                            'type' => 'string',
                        ),
                        'events' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'ServiceEvent',
                                'type' => 'object',
                                'properties' => array(
                                    'id' => array(
                                        'type' => 'string',
                                    ),
                                    'createdAt' => array(
                                        'type' => 'string',
                                    ),
                                    'message' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'DeregisterContainerInstanceResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'containerInstance' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'containerInstanceArn' => array(
                            'type' => 'string',
                        ),
                        'ec2InstanceId' => array(
                            'type' => 'string',
                        ),
                        'remainingResources' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => array(
                                    '' => array(
                                    ),
                                ),
                            ),
                        ),
                        'registeredResources' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => array(
                                    '' => array(
                                    ),
                                ),
                            ),
                        ),
                        'status' => array(
                            'type' => 'string',
                        ),
                        'agentConnected' => array(
                            'type' => 'boolean',
                        ),
                        'runningTasksCount' => array(
                            'type' => 'numeric',
                        ),
                        'pendingTasksCount' => array(
                            'type' => 'numeric',
                        ),
                    ),
                ),
            ),
        ),
        'DeregisterTaskDefinitionResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'taskDefinition' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'taskDefinitionArn' => array(
                            'type' => 'string',
                        ),
                        'containerDefinitions' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'ContainerDefinition',
                                'type' => 'object',
                                'properties' => array(
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'image' => array(
                                        'type' => 'string',
                                    ),
                                    'cpu' => array(
                                        'type' => 'numeric',
                                    ),
                                    'memory' => array(
                                        'type' => 'numeric',
                                    ),
                                    'links' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'portMappings' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'PortMapping',
                                            'type' => 'object',
                                            'properties' => array(
                                                'containerPort' => array(
                                                    'type' => 'numeric',
                                                ),
                                                'hostPort' => array(
                                                    'type' => 'numeric',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'essential' => array(
                                        'type' => 'boolean',
                                    ),
                                    'entryPoint' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'command' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'environment' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'KeyValuePair',
                                            'type' => 'object',
                                            'properties' => array(
                                                'name' => array(
                                                    'type' => 'string',
                                                ),
                                                'value' => array(
                                                    'type' => 'string',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'mountPoints' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'MountPoint',
                                            'type' => 'object',
                                            'properties' => array(
                                                'sourceVolume' => array(
                                                    'type' => 'string',
                                                ),
                                                'containerPath' => array(
                                                    'type' => 'string',
                                                ),
                                                'readOnly' => array(
                                                    'type' => 'boolean',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'volumesFrom' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'VolumeFrom',
                                            'type' => 'object',
                                            'properties' => array(
                                                'sourceContainer' => array(
                                                    'type' => 'string',
                                                ),
                                                'readOnly' => array(
                                                    'type' => 'boolean',
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'family' => array(
                            'type' => 'string',
                        ),
                        'revision' => array(
                            'type' => 'numeric',
                        ),
                        'volumes' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Volume',
                                'type' => 'object',
                                'properties' => array(
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'host' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'sourcePath' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'DescribeClustersResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'clusters' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Cluster',
                        'type' => 'object',
                        'properties' => array(
                            'clusterArn' => array(
                                'type' => 'string',
                            ),
                            'clusterName' => array(
                                'type' => 'string',
                            ),
                            'status' => array(
                                'type' => 'string',
                            ),
                            'registeredContainerInstancesCount' => array(
                                'type' => 'numeric',
                            ),
                            'runningTasksCount' => array(
                                'type' => 'numeric',
                            ),
                            'pendingTasksCount' => array(
                                'type' => 'numeric',
                            ),
                        ),
                    ),
                ),
                'failures' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => array(
                            'arn' => array(
                                'type' => 'string',
                            ),
                            'reason' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'DescribeContainerInstancesResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'containerInstances' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'ContainerInstance',
                        'type' => 'object',
                        'properties' => array(
                            'containerInstanceArn' => array(
                                'type' => 'string',
                            ),
                            'ec2InstanceId' => array(
                                'type' => 'string',
                            ),
                            'remainingResources' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'Resource',
                                    'type' => 'object',
                                    'properties' => array(
                                        '' => array(
                                        ),
                                    ),
                                ),
                            ),
                            'registeredResources' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'Resource',
                                    'type' => 'object',
                                    'properties' => array(
                                        '' => array(
                                        ),
                                    ),
                                ),
                            ),
                            'status' => array(
                                'type' => 'string',
                            ),
                            'agentConnected' => array(
                                'type' => 'boolean',
                            ),
                            'runningTasksCount' => array(
                                'type' => 'numeric',
                            ),
                            'pendingTasksCount' => array(
                                'type' => 'numeric',
                            ),
                        ),
                    ),
                ),
                'failures' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => array(
                            'arn' => array(
                                'type' => 'string',
                            ),
                            'reason' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'DescribeServicesResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'services' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Service',
                        'type' => 'object',
                        'properties' => array(
                            'serviceArn' => array(
                                'type' => 'string',
                            ),
                            'serviceName' => array(
                                'type' => 'string',
                            ),
                            'clusterArn' => array(
                                'type' => 'string',
                            ),
                            'loadBalancers' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'LoadBalancer',
                                    'type' => 'object',
                                    'properties' => array(
                                        'loadBalancerName' => array(
                                            'type' => 'string',
                                        ),
                                        'containerName' => array(
                                            'type' => 'string',
                                        ),
                                        'containerPort' => array(
                                            'type' => 'numeric',
                                        ),
                                    ),
                                ),
                            ),
                            'status' => array(
                                'type' => 'string',
                            ),
                            'desiredCount' => array(
                                'type' => 'numeric',
                            ),
                            'runningCount' => array(
                                'type' => 'numeric',
                            ),
                            'pendingCount' => array(
                                'type' => 'numeric',
                            ),
                            'taskDefinition' => array(
                                'type' => 'string',
                            ),
                            'deployments' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'Deployment',
                                    'type' => 'object',
                                    'properties' => array(
                                        'id' => array(
                                            'type' => 'string',
                                        ),
                                        'status' => array(
                                            'type' => 'string',
                                        ),
                                        'taskDefinition' => array(
                                            'type' => 'string',
                                        ),
                                        'desiredCount' => array(
                                            'type' => 'numeric',
                                        ),
                                        'pendingCount' => array(
                                            'type' => 'numeric',
                                        ),
                                        'runningCount' => array(
                                            'type' => 'numeric',
                                        ),
                                        'createdAt' => array(
                                            'type' => 'string',
                                        ),
                                        'updatedAt' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                ),
                            ),
                            'roleArn' => array(
                                'type' => 'string',
                            ),
                            'events' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'ServiceEvent',
                                    'type' => 'object',
                                    'properties' => array(
                                        'id' => array(
                                            'type' => 'string',
                                        ),
                                        'createdAt' => array(
                                            'type' => 'string',
                                        ),
                                        'message' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'failures' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => array(
                            'arn' => array(
                                'type' => 'string',
                            ),
                            'reason' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'DescribeTaskDefinitionResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'taskDefinition' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'taskDefinitionArn' => array(
                            'type' => 'string',
                        ),
                        'containerDefinitions' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'ContainerDefinition',
                                'type' => 'object',
                                'properties' => array(
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'image' => array(
                                        'type' => 'string',
                                    ),
                                    'cpu' => array(
                                        'type' => 'numeric',
                                    ),
                                    'memory' => array(
                                        'type' => 'numeric',
                                    ),
                                    'links' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'portMappings' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'PortMapping',
                                            'type' => 'object',
                                            'properties' => array(
                                                'containerPort' => array(
                                                    'type' => 'numeric',
                                                ),
                                                'hostPort' => array(
                                                    'type' => 'numeric',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'essential' => array(
                                        'type' => 'boolean',
                                    ),
                                    'entryPoint' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'command' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'environment' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'KeyValuePair',
                                            'type' => 'object',
                                            'properties' => array(
                                                'name' => array(
                                                    'type' => 'string',
                                                ),
                                                'value' => array(
                                                    'type' => 'string',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'mountPoints' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'MountPoint',
                                            'type' => 'object',
                                            'properties' => array(
                                                'sourceVolume' => array(
                                                    'type' => 'string',
                                                ),
                                                'containerPath' => array(
                                                    'type' => 'string',
                                                ),
                                                'readOnly' => array(
                                                    'type' => 'boolean',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'volumesFrom' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'VolumeFrom',
                                            'type' => 'object',
                                            'properties' => array(
                                                'sourceContainer' => array(
                                                    'type' => 'string',
                                                ),
                                                'readOnly' => array(
                                                    'type' => 'boolean',
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'family' => array(
                            'type' => 'string',
                        ),
                        'revision' => array(
                            'type' => 'numeric',
                        ),
                        'volumes' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Volume',
                                'type' => 'object',
                                'properties' => array(
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'host' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'sourcePath' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'DescribeTasksResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'tasks' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Task',
                        'type' => 'object',
                        'properties' => array(
                            'taskArn' => array(
                                'type' => 'string',
                            ),
                            'clusterArn' => array(
                                'type' => 'string',
                            ),
                            'taskDefinitionArn' => array(
                                'type' => 'string',
                            ),
                            'containerInstanceArn' => array(
                                'type' => 'string',
                            ),
                            'overrides' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'containerOverrides' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'ContainerOverride',
                                            'type' => 'object',
                                            'properties' => array(
                                                'name' => array(
                                                    'type' => 'string',
                                                ),
                                                'command' => array(
                                                    'type' => 'array',
                                                    'items' => array(
                                                        'name' => 'String',
                                                        'type' => 'string',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'lastStatus' => array(
                                'type' => 'string',
                            ),
                            'desiredStatus' => array(
                                'type' => 'string',
                            ),
                            'containers' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'Container',
                                    'type' => 'object',
                                    'properties' => array(
                                        'containerArn' => array(
                                            'type' => 'string',
                                        ),
                                        'taskArn' => array(
                                            'type' => 'string',
                                        ),
                                        'name' => array(
                                            'type' => 'string',
                                        ),
                                        'lastStatus' => array(
                                            'type' => 'string',
                                        ),
                                        'exitCode' => array(
                                            'type' => 'numeric',
                                        ),
                                        'reason' => array(
                                            'type' => 'string',
                                        ),
                                        'networkBindings' => array(
                                            'type' => 'array',
                                            'items' => array(
                                                'name' => 'NetworkBinding',
                                                'type' => 'object',
                                                'properties' => array(
                                                    'bindIP' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'containerPort' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                    'hostPort' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'startedBy' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
                'failures' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => array(
                            'arn' => array(
                                'type' => 'string',
                            ),
                            'reason' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'DiscoverPollEndpointResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'endpoint' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListClustersResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'clusterArns' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListContainerInstancesResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'containerInstanceArns' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListServicesResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'serviceArns' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListTaskDefinitionFamiliesResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'families' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListTaskDefinitionsResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'taskDefinitionArns' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListTasksResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'taskArns' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'String',
                        'type' => 'string',
                    ),
                ),
                'nextToken' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'RegisterContainerInstanceResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'containerInstance' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'containerInstanceArn' => array(
                            'type' => 'string',
                        ),
                        'ec2InstanceId' => array(
                            'type' => 'string',
                        ),
                        'remainingResources' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => array(
                                    '' => array(
                                    ),
                                ),
                            ),
                        ),
                        'registeredResources' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Resource',
                                'type' => 'object',
                                'properties' => array(
                                    '' => array(
                                    ),
                                ),
                            ),
                        ),
                        'status' => array(
                            'type' => 'string',
                        ),
                        'agentConnected' => array(
                            'type' => 'boolean',
                        ),
                        'runningTasksCount' => array(
                            'type' => 'numeric',
                        ),
                        'pendingTasksCount' => array(
                            'type' => 'numeric',
                        ),
                    ),
                ),
            ),
        ),
        'RegisterTaskDefinitionResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'taskDefinition' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'taskDefinitionArn' => array(
                            'type' => 'string',
                        ),
                        'containerDefinitions' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'ContainerDefinition',
                                'type' => 'object',
                                'properties' => array(
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'image' => array(
                                        'type' => 'string',
                                    ),
                                    'cpu' => array(
                                        'type' => 'numeric',
                                    ),
                                    'memory' => array(
                                        'type' => 'numeric',
                                    ),
                                    'links' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'portMappings' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'PortMapping',
                                            'type' => 'object',
                                            'properties' => array(
                                                'containerPort' => array(
                                                    'type' => 'numeric',
                                                ),
                                                'hostPort' => array(
                                                    'type' => 'numeric',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'essential' => array(
                                        'type' => 'boolean',
                                    ),
                                    'entryPoint' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'command' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'String',
                                            'type' => 'string',
                                        ),
                                    ),
                                    'environment' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'KeyValuePair',
                                            'type' => 'object',
                                            'properties' => array(
                                                'name' => array(
                                                    'type' => 'string',
                                                ),
                                                'value' => array(
                                                    'type' => 'string',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'mountPoints' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'MountPoint',
                                            'type' => 'object',
                                            'properties' => array(
                                                'sourceVolume' => array(
                                                    'type' => 'string',
                                                ),
                                                'containerPath' => array(
                                                    'type' => 'string',
                                                ),
                                                'readOnly' => array(
                                                    'type' => 'boolean',
                                                ),
                                            ),
                                        ),
                                    ),
                                    'volumesFrom' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'VolumeFrom',
                                            'type' => 'object',
                                            'properties' => array(
                                                'sourceContainer' => array(
                                                    'type' => 'string',
                                                ),
                                                'readOnly' => array(
                                                    'type' => 'boolean',
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'family' => array(
                            'type' => 'string',
                        ),
                        'revision' => array(
                            'type' => 'numeric',
                        ),
                        'volumes' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Volume',
                                'type' => 'object',
                                'properties' => array(
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'host' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'sourcePath' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'RunTaskResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'tasks' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Task',
                        'type' => 'object',
                        'properties' => array(
                            'taskArn' => array(
                                'type' => 'string',
                            ),
                            'clusterArn' => array(
                                'type' => 'string',
                            ),
                            'taskDefinitionArn' => array(
                                'type' => 'string',
                            ),
                            'containerInstanceArn' => array(
                                'type' => 'string',
                            ),
                            'overrides' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'containerOverrides' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'ContainerOverride',
                                            'type' => 'object',
                                            'properties' => array(
                                                'name' => array(
                                                    'type' => 'string',
                                                ),
                                                'command' => array(
                                                    'type' => 'array',
                                                    'items' => array(
                                                        'name' => 'String',
                                                        'type' => 'string',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'lastStatus' => array(
                                'type' => 'string',
                            ),
                            'desiredStatus' => array(
                                'type' => 'string',
                            ),
                            'containers' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'Container',
                                    'type' => 'object',
                                    'properties' => array(
                                        'containerArn' => array(
                                            'type' => 'string',
                                        ),
                                        'taskArn' => array(
                                            'type' => 'string',
                                        ),
                                        'name' => array(
                                            'type' => 'string',
                                        ),
                                        'lastStatus' => array(
                                            'type' => 'string',
                                        ),
                                        'exitCode' => array(
                                            'type' => 'numeric',
                                        ),
                                        'reason' => array(
                                            'type' => 'string',
                                        ),
                                        'networkBindings' => array(
                                            'type' => 'array',
                                            'items' => array(
                                                'name' => 'NetworkBinding',
                                                'type' => 'object',
                                                'properties' => array(
                                                    'bindIP' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'containerPort' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                    'hostPort' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'startedBy' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
                'failures' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => array(
                            'arn' => array(
                                'type' => 'string',
                            ),
                            'reason' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'StartTaskResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'tasks' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Task',
                        'type' => 'object',
                        'properties' => array(
                            'taskArn' => array(
                                'type' => 'string',
                            ),
                            'clusterArn' => array(
                                'type' => 'string',
                            ),
                            'taskDefinitionArn' => array(
                                'type' => 'string',
                            ),
                            'containerInstanceArn' => array(
                                'type' => 'string',
                            ),
                            'overrides' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'containerOverrides' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'ContainerOverride',
                                            'type' => 'object',
                                            'properties' => array(
                                                'name' => array(
                                                    'type' => 'string',
                                                ),
                                                'command' => array(
                                                    'type' => 'array',
                                                    'items' => array(
                                                        'name' => 'String',
                                                        'type' => 'string',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'lastStatus' => array(
                                'type' => 'string',
                            ),
                            'desiredStatus' => array(
                                'type' => 'string',
                            ),
                            'containers' => array(
                                'type' => 'array',
                                'items' => array(
                                    'name' => 'Container',
                                    'type' => 'object',
                                    'properties' => array(
                                        'containerArn' => array(
                                            'type' => 'string',
                                        ),
                                        'taskArn' => array(
                                            'type' => 'string',
                                        ),
                                        'name' => array(
                                            'type' => 'string',
                                        ),
                                        'lastStatus' => array(
                                            'type' => 'string',
                                        ),
                                        'exitCode' => array(
                                            'type' => 'numeric',
                                        ),
                                        'reason' => array(
                                            'type' => 'string',
                                        ),
                                        'networkBindings' => array(
                                            'type' => 'array',
                                            'items' => array(
                                                'name' => 'NetworkBinding',
                                                'type' => 'object',
                                                'properties' => array(
                                                    'bindIP' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'containerPort' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                    'hostPort' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'startedBy' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
                'failures' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'name' => 'Failure',
                        'type' => 'object',
                        'properties' => array(
                            'arn' => array(
                                'type' => 'string',
                            ),
                            'reason' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'StopTaskResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'task' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'taskArn' => array(
                            'type' => 'string',
                        ),
                        'clusterArn' => array(
                            'type' => 'string',
                        ),
                        'taskDefinitionArn' => array(
                            'type' => 'string',
                        ),
                        'containerInstanceArn' => array(
                            'type' => 'string',
                        ),
                        'overrides' => array(
                            'type' => 'object',
                            'properties' => array(
                                'containerOverrides' => array(
                                    'type' => 'array',
                                    'items' => array(
                                        'name' => 'ContainerOverride',
                                        'type' => 'object',
                                        'properties' => array(
                                            'name' => array(
                                                'type' => 'string',
                                            ),
                                            'command' => array(
                                                'type' => 'array',
                                                'items' => array(
                                                    'name' => 'String',
                                                    'type' => 'string',
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'lastStatus' => array(
                            'type' => 'string',
                        ),
                        'desiredStatus' => array(
                            'type' => 'string',
                        ),
                        'containers' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Container',
                                'type' => 'object',
                                'properties' => array(
                                    'containerArn' => array(
                                        'type' => 'string',
                                    ),
                                    'taskArn' => array(
                                        'type' => 'string',
                                    ),
                                    'name' => array(
                                        'type' => 'string',
                                    ),
                                    'lastStatus' => array(
                                        'type' => 'string',
                                    ),
                                    'exitCode' => array(
                                        'type' => 'numeric',
                                    ),
                                    'reason' => array(
                                        'type' => 'string',
                                    ),
                                    'networkBindings' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'name' => 'NetworkBinding',
                                            'type' => 'object',
                                            'properties' => array(
                                                'bindIP' => array(
                                                    'type' => 'string',
                                                ),
                                                'containerPort' => array(
                                                    'type' => 'numeric',
                                                ),
                                                'hostPort' => array(
                                                    'type' => 'numeric',
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'startedBy' => array(
                            'type' => 'string',
                        ),
                    ),
                ),
            ),
        ),
        'SubmitContainerStateChangeResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'acknowledgment' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'SubmitTaskStateChangeResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'acknowledgment' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'UpdateServiceResponse' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'service' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'serviceArn' => array(
                            'type' => 'string',
                        ),
                        'serviceName' => array(
                            'type' => 'string',
                        ),
                        'clusterArn' => array(
                            'type' => 'string',
                        ),
                        'loadBalancers' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'LoadBalancer',
                                'type' => 'object',
                                'properties' => array(
                                    'loadBalancerName' => array(
                                        'type' => 'string',
                                    ),
                                    'containerName' => array(
                                        'type' => 'string',
                                    ),
                                    'containerPort' => array(
                                        'type' => 'numeric',
                                    ),
                                ),
                            ),
                        ),
                        'status' => array(
                            'type' => 'string',
                        ),
                        'desiredCount' => array(
                            'type' => 'numeric',
                        ),
                        'runningCount' => array(
                            'type' => 'numeric',
                        ),
                        'pendingCount' => array(
                            'type' => 'numeric',
                        ),
                        'taskDefinition' => array(
                            'type' => 'string',
                        ),
                        'deployments' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'Deployment',
                                'type' => 'object',
                                'properties' => array(
                                    'id' => array(
                                        'type' => 'string',
                                    ),
                                    'status' => array(
                                        'type' => 'string',
                                    ),
                                    'taskDefinition' => array(
                                        'type' => 'string',
                                    ),
                                    'desiredCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'pendingCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'runningCount' => array(
                                        'type' => 'numeric',
                                    ),
                                    'createdAt' => array(
                                        'type' => 'string',
                                    ),
                                    'updatedAt' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'roleArn' => array(
                            'type' => 'string',
                        ),
                        'events' => array(
                            'type' => 'array',
                            'items' => array(
                                'name' => 'ServiceEvent',
                                'type' => 'object',
                                'properties' => array(
                                    'id' => array(
                                        'type' => 'string',
                                    ),
                                    'createdAt' => array(
                                        'type' => 'string',
                                    ),
                                    'message' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
